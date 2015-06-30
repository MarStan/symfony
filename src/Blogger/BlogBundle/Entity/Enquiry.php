<?php

namespace Blogger\BlogBundle\Entity;

/**
 * Class Enquiry
 * @author John Doe
 */
class Enquiry
{
    protected $name;

    protected $email;

    protected $subject;

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
