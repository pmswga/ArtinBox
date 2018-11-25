<?php

use Illuminate\Database\Seeder;

class MaterialsTypeSeeder extends Seeder
{

    public function run()
    {
        DB::table('materialstype')->insert([
            [
                'material' => '{ 
                    "PLYWOOD_6": {
                        "size": 6,
                        "material": "Фанера 6"
                    },
                    "PLYWOOD_9": {
                        "size": 9,
                        "material": "Фанера 9"
                    },
                    "PLYWOOD_12": {
                        "size": 12,
                        "material": "Фанера 12"
                    },
                    "PLYWOOD_15": {
                        "size": 15,
                        "material": "Фанера 15"
                    },
                    "PLYWOOD_18": {
                        "size": 18,
                        "material": "Фанера 18"
                    },
                    "PLYWOOD_21": {
                        "size": 21,
                        "material": "Фанера 21"
                    },
                    "WOOD_20": {
                        "size": 20,
                        "material": "Дерево 20"
                    },
                    "WOOD_30": {
                        "size": 30,
                        "material": "Дерево 30"
                    }
                }'
            ]
        ]);
    }
}
