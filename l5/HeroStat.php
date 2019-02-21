<?php
/**
 * Created by PhpStorm.
 * User: gagau
 * Date: 10.02.2019
 * Time: 12:48
 */

class HeroStat
{

    public $intelligence;
    public $agility;
    public $strange;
    public $summary;
    public $name;



    public function displayHeroInfo()
    {
        $this->summary = $this->intelligence + $this->strange + $this->agility;
       if ($this->getSummary()> 100)
       {
           echo '������� ����, ������� �����, � �� ���� �������';
       }else if($this->getSummary() < 100 && $this->getSummary() > 60)
       {
           echo '��, ������������� ����';
       }else{
           echo '������������� ��� �����������';
       }
    }

    /**
     * @return mixed
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param mixed $intelligence
     * @param $heroLevel
     * @return bool
     */
    public function setIntelligence($intelligence, $heroLevel)
    {
        if ($heroLevel <= 1 && $intelligence >= 30)
        {
            echo '�� ��� �� ����� � ������ �����������, ����� ������';
            return false;
        }
        $this->intelligence = $intelligence;
    }

    /**
     * @param mixed $agility
     */
    public function setAgility($agility)
    {
        $this->agility = $agility;
    }

    /**
     * @param mixed $strange
     */
    public function setStrange($strange)
    {
        $this->strange = $strange;
    }

}
$slark = new HeroStat();
$slark->setAgility(300);
$slark->setIntelligence(303333,1);
$slark->setStrange(40);
$slark->displayHeroInfo();