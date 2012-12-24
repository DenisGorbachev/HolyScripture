<?php

namespace Religions\Islam;

use Religions\Common\Person as CommonPerson;

class Person extends CommonPerson
{
    /**
     * @var Person[]
     */
    protected $partners = array();

    public function setPartners($partners)
    {
        if (!$this->getGender() && count($partners) > 1) {
            // Surah An Nisa’ Chapter 4 Verse 24: "Also (prohibited are) women already married..."
            throw new \Exception('Polyandry is not allowed.');
        }
        foreach ($partners as $partner) {
            $this->validatePartner($partner);
        }
        $this->partners = $partners;
    }

    public function getPartners()
    {
        return $this->partners;
    }

    public function addPartner(Person $partner)
    {
        if (!$this->getGender() && count($this->partners)) {
            // Surah An Nisa’ Chapter 4 Verse 24: "Also (prohibited are) women already married..."
            throw new \Exception('Polyandry is not allowed.');
        }
        $this->validatePartner($partner);
        $this->partners[] = $partner;
    }

    public function validatePartner(Person $partner)
    {
        if ($partner->getGender() == $partner->getGender()) {
            // Leviticus 18:22: "Do not have sexual relations with a man as one does with a woman; that is detestable"
            throw new \Exception('Homosexuality is not allowed');
        }
    }


}
