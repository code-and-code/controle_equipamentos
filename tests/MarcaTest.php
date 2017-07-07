<?php
namespace App\Tests;

use App\Models\Marca;

class MarcaTest extends AbstractTestCase
{
    public function test_create()
    {
        $marca = new Marca();
        $create = $marca->create(['nome' => 'Marca create test']);
        $r = $marca->find($create->id);
        $this->assertEquals('Marca create test',$r->nome);
    }

    public function test_update()
    {
        $marca = new Marca();
        $create = $marca->create(['nome' => 'Marca update test']);
        $r = $marca->find($create->id);
        $r->update(['nome' => 'Marca updated_at test']);
        $r = $marca->find($create->id);
        $this->assertEquals('Marca updated_at test',$r->nome);
    }

    public function test_delete()
    {
        $marca  = new Marca();
        $create = $marca->create(['nome' => 'Marca test delete']);
        $r = $marca->find($create->id);
        $r->delete();
        $r = $marca->find($create->id);
        $this->assertEquals(false,$r);
    }

}