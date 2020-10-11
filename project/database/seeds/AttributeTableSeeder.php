<?php

use App\Shop\Attributes\Attribute;
use App\Shop\AttributeValues\AttributeValue;
use Illuminate\Database\Seeder;

class AttributeTableSeeder extends Seeder
{
    public function run()
    {
        $sizeAttr = factory(Attribute::class)->create(['name' => 'Size']);
        factory(AttributeValue::class)->create([
            'value' => 'small',
            'attribute_id' => $sizeAttr->id
        ]);

        factory(AttributeValue::class)->create([
            'value' => 'medium',
            'attribute_id' => $sizeAttr->id
        ]);

        factory(AttributeValue::class)->create([
            'value' => 'large',
            'attribute_id' => $sizeAttr->id
        ]);

        $packingAttr = factory(Attribute::class)->create(['name' => 'Packing']);
        factory(AttributeValue::class)->create([
            'value' => '307x108',
            'attribute_id' => $packingAttr->id
        ]);
        
        factory(AttributeValue::class)->create([
            'value' => 'Small Pack',
            'attribute_id' => $packingAttr->id
        ]);

        factory(AttributeValue::class)->create([
            'value' => 'Glass Bottle',
            'attribute_id' => $packingAttr->id
        ]);

        $netWeightAttr = factory(Attribute::class)->create(['name' => 'Net Weight']);
        
        factory(AttributeValue::class)->create([
            'value' => '210 cc',
            'attribute_id' => $netWeightAttr->id
        ]);

        factory(AttributeValue::class)->create([
            'value' => '620 cc',
            'attribute_id' => $netWeightAttr->id
        ]);

        factory(AttributeValue::class)->create([
            'value' => '770 cc',
            'attribute_id' => $netWeightAttr->id
        ]);
        
        factory(AttributeValue::class)->create([
            'value' => '100 g',
            'attribute_id' => $netWeightAttr->id
        ]);

        factory(AttributeValue::class)->create([
            'value' => '1 kg',
            'attribute_id' => $netWeightAttr->id
        ]);
        
        // $colorAttr = factory(Attribute::class)->create(['name' => 'Color']);

        // // factory(AttributeValue::class)->create([
        // //     'value' => 'red',
        // //     'attribute_id' => $colorAttr->id
        // // ]);

        // // factory(AttributeValue::class)->create([
        // //     'value' => 'yellow',
        // //     'attribute_id' => $colorAttr->id
        // // ]);

        // // factory(AttributeValue::class)->create([
        // //     'value' => 'blue',
        // //     'attribute_id' => $colorAttr->id
        // // ]);
    }
}