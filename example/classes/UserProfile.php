<?php

class UserProfile
{

    /**
     * @var
     */
    public $logger;

    /**
     * UserProfile constructor.
     *
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     *
     */
    public function createUser()
    {
        echo "Creating User";
        $this->logger->log("user created");
    }

    /**'
     *
     */
    public function updateUser()
    {
        echo "updating User";
        $this->logger->log("updating user");
    }

    /**
     *
     */
    public function deleteUser()
    {
        echo "deleting User";
        $this->logger->log("deleting user");
    }
}