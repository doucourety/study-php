<?php

/**
 * Class AppleWatch
 * Класс наследник от класса Clock
 * Унаследовал все его доступные (public и protected) свойства и методы
 */
class AppleWatch extends Clock
{
    /**
     * Вызывается при создании объекта из класса AppleWatch. После создания задает свойству type значение - электроника
     * AppleWatch constructor.
     */
    public function __construct()
    {
        $this->type = 'electronic';
    }

    /**
     * Мы перезаписали метод doCharge и теперь он в два раза быстрее заряжается
     * @param int $number
     */
    public function doCharge($number)
    {
       $this->charge = $this->charge +$number + $number;
    }

}