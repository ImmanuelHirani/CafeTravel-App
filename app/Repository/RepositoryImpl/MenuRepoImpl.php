<?php

// MenuRepoImpl.php
namespace App\Repository\RepositoryImpl;

use App\Repository\MenuRepo;
use App\Models\Menu;
use App\Models\menuProperties;
use Illuminate\Support\Facades\Log;

class MenuRepoImpl implements MenuRepo
{

    // Insert method di repository


    public function create(array $data): Menu
    {
        return Menu::create($data);
    }



    public function find($id)
    {
        return Menu::find($id);
    }

    // MenuRepository.php

    public function findSize($id, $size)
    {
        return menuProperties::where('menu_ID', $id)->where('size', $size)->first();
    }

    public function updateSize(menuProperties $properties, array $data)
    {
        // Update data ukuran menu
        $properties->update($data);
    }


    public function update(Menu $menu, array $data)
    {
        $menu->update($data);
    }


    public function delete($id)
    {
        $menu = Menu::find($id);
        if ($menu) {
            $menu->delete();
            return true;
        }
        return false;
    }
}
