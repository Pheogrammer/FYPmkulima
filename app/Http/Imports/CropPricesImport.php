<?php
use App\Models\Price;
use App\Models\Region;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\Crop;
class CropPricesImport implements ToCollection
{
    protected $cropID;

    public function __construct($cropID)
    {
        $this->cropID = $cropID;
    }

    public function collection(Collection $rows)
    {
        $regions = $rows->get(0)->map(function ($regionName) {
            return strtolower(trim($regionName));
        });

        $prices = $rows->get(1);

        // Check if the number of regions matches the number of prices
        if (count($regions) !== count($prices)) {
            throw new \Exception('Number of regions and prices do not match.');
        }

        $crop = Crop::find($this->cropID);

        // Validate and insert prices for each region
        foreach ($regions as $index => $regionName) {
            $region = Region::where('name', strtolower($regionName))->first();

            if (!$region) {
                throw new \Exception("Region '{$regionName}' not found.");
            }

            if ($prices[$index] !== null && trim($prices[$index]) !== '') {
                $price = new Price();
                $price->cropID = $this->cropID;
                $price->regionID = $region->id;
                $price->price = $prices[$index];
                $price->save();
            }
        }
    }
}
