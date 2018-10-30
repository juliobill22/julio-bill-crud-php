<?php
/**
 * @author julioenglish
 */
interface CRUDInterface {
    public function insert();
    public function edit();
    public function delete();
    public function lists();
}