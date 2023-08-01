<?php

namespace App\Imports;

use App\Models\Crop;
use App\Models\Price;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\Region;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CropPricesImport implements ToModel, WithHeadingRow, WithChunkReading
{
    use Importable;

    protected $cropID;

    public function __construct($cropID)
    {
        $this->cropID = $cropID;
    }

    public function model(array $row)
    {
        $regionName = strtolower(trim($row['region']));
        $priceValue = trim($row['price']);

        if ($priceValue !== '') {
            $region = Region::where('name', $regionName)->first();

            if (!$region) {
                // Region not found, return null to skip this row
                return null;
            }

            $price = new Price();
            $price->cropID = $this->cropID;
            $price->regionID = $region->id;
            $price->maxprice = $priceValue;

            return $price;
        }

        // Price value is empty, return null to skip this row
        return null;
    }

    public function chunkSize(): int
    {
        return 100; // Adjust the chunk size based on your dataset size
    }
}
