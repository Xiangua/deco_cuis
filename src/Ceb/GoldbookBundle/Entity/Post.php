<?php
namespace Ceb\GoldbookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraint;


/**
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Post
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

     /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    public $pseudo;

    /**
     * @Assert\Email(
     *     message = "'{{ value }}' n'est pas un email valide.",
     *     checkMX = true
     * )
     * @Assert\NotBlank
     */
    public $email;
    
    /**
    * @ORM\Column(type="text")
    */
    public $message;

    /**
    * @ORM\Column(name="date", type="date")
    */
    public $date;

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getDate()
    {
        return $this->date;
    }

}
?>