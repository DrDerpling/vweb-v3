<?php

use Illuminate\Database\Seeder;
use App\Models\MainType;
use App\Models\Brand;

class MainTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mainTypes = [
            'Workstation',
            'Laptop',
            'Network Attached Storage',
            'Furniture',
            'Monitor',
            'Printer',
            'Scanner',
            'Coffee machine',
        ];

        $subtypes = [
            'Workstation' => [
                'Dell' => [
                    'Optiplex 755',
                    'Optiplex 760',
                    'Optiplex 765',
                    'Optiplex 770',
                    'Optiplex 775',
                    'Optiplex 780',
                ],
                'HP' => [
                    'DX2200',
                    'XW 6000'
                ]
            ],
            'Laptop' => [
                'Dell' => [
                    'GX280',
                    'GX290',
                    'GX300',
                    'GX310',
                    'Latitude E6500',
                    'Latitude E5500'

                ]
            ],
            'Network Attached Storage' => [
                'synology' => [
                    'DS414',
                    'RS815+',
                    'RS3617XS+',
                    'RS3617XS'
                ],
                'QNAP' => [
                    'TS-809 Pro'
                ]
            ],
            'Furniture' => [
                'All' => [
                    'Office table',
                    'Conference table',
                    'Office table Elektrisch'
                ]
            ],
            'Monitor' => [
                'HP' => [
                    'No type'
                ],
                'Dell' => [
                    '1908FP',
                    'P190S',
                    'U2412M',
                    'U2715H',
                    'E178FP'
                ]
            ],
            'Printer' => [
                'Ricoh' => [
                    'P7126N',
                    'Copier 224',
                    'Copier 332'
                ],
                'Toshiba' => [
                    'BEX4T1'
                ],
                'Brother' => [
                    'HL2150N',
                    'HL2250N'
                ]
            ],
            'Scanner' => [
                'Symbol' => [
                    'LS2208',
                    'PSC-959',
                    'LS3578'
                ],
                'Datalogic' => [
                    'Quickscan Imager',
                ],
                'Canon' => [
                    'LIDE20',
                    'DR3080CII'
                ]
            ],
            'Coffee machine' => [
                'Jura ' => [
                    'Giga X8C'
                ]
            ]
        ];

        factory(MainType::class, count($mainTypes))
            ->make()
            ->each(function ($mainType, $key) use ($mainTypes, $subtypes) {
                $mainType->name = $mainTypes[$key];
                $mainType->save();
                foreach ($subtypes[$mainTypes[$key]] as $brand => $brandSubtype) {
                    $linkBrand = Brand::firstOrCreate(['name' => $brand]);
                    foreach ($brandSubtype as $subptype) {
                        $mainType->SubType()->make(['name' => $subptype])->brand()->associate($linkBrand->id)->save();
                    }
                }
            });
    }
}
