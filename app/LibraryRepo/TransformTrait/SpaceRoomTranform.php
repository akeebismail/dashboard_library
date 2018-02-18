<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 2/18/18
 * Time: 1:36 AM
 */
namespace App\LibraryRepo\TransformTrait;
use App\Space;

trait SpaceRoomTranform{

    public function spaceRoom(Space $space){
        $data = new Space;
        $data->id = $space->id;
        $data->occupied = $space->occupied;
        $data->for_day = $space->for_day;
        $data->room = $space->room;


        return $data;
    }
}