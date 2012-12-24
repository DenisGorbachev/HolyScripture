<?php

namespace Religions\Christianity;

use Religions\Common\Person as CommonPerson;

class Person extends CommonPerson
{
    /**
     * @var Person
     */
    protected $partner;

    public function setPartner(Person $partner)
    {
        $this->validatePartner($partner);
        $this->partner = $partner;
    }

    public function getPartner()
    {
        return $this->partner;
    }

    public function validatePartner(Person $partner)
    {
        if ($partner->getGender() == $partner->getGender()) {
            // Leviticus 18:22: "Do not have sexual relations with a man as one does with a woman; that is detestable"
            throw new \Exception('Homosexuality is not allowed');
        }
    }

}
