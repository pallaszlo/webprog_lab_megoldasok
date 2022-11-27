<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author pali
 */
interface Persistable {

    public function save();

    public function load();

    public function delete();
}
