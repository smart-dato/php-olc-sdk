<?php

namespace SmartDato\Olc\DataObjects;

use SmartDato\Olc\Contracts\DataObject;

class ParcelObjectCollection implements DataObject
{
    /**
     * @var array<ParcelObject>
     */
    protected array $parcels;

    public function __construct()
    {
        $this->parcels = [];
    }

    public function add(ParcelObject $parcel): ParcelObjectCollection
    {
        $this->parcels[] = $parcel;

        return $this;
    }

    public function build(): array
    {
        $data = [];
        foreach ($this->parcels as $parcel) {
            $data[] = $parcel->build();
        }

        return $data;
    }
}
