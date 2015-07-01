<?php

namespace Blogger\BlogBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Enquiry
 * @author Marian Stanchuk
 */
class Enquiry
{
    /**
     * @Assert\NotBlank()
     */
    protected $name;

    /**
     * @Assert\Email(
     *  message = "Choose a valid email!1"
     * )
     */
    protected $email;
    /**
     * @Assert\NotBlank()
     * @Assert\Length(max=50)
     */
    protected $subject;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(min=10)
     */
    protected $body;

    /**
     * Getter for name
     *
     * return string
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Setter for name
     *
     * @param string $name
     * @return Enquiry
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }
    
    /**
     * Getter for email
     *
     * return string
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    /**
     * Setter for email
     *
     * @param string $email
     * @return Enquiry
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }
    
    /**
     * Getter for subject
     *
     * return string
     */
    public function getSubject()
    {
        return $this->subject;
    }
    
    /**
     * Setter for subject
     *
     * @param string $subject
     * @return Enquiry
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    
        return $this;
    }
    
    /**
     * Getter for body
     *
     * return string
     */
    public function getBody()
    {
        return $this->body;
    }
    
    /**
     * Setter for body
     *
     * @param string $body
     * @return Enquiry
     */
    public function setBody($body)
    {
        $this->body = $body;
    
        return $this;
    }
}
