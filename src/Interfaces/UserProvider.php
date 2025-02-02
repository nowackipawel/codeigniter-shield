<?php

namespace Sparks\Shield\Interfaces;

interface UserProvider
{
    /**
     * Locates an identity object by ID.
     *
     * @return \Sparks\Shield\Interfaces\Authenticatable|null
     */
    public function findById(int $id);

    /**
     * Locate a user by the given credentials.
     *
     * @return \Sparks\Shield\Interfaces\Authenticatable|null
     */
    public function findByCredentials(array $credentials);

    /**
     * Find a user by their ID and "remember-me" token.
     *
     * @return \Sparks\Shield\Interfaces\Authenticatable|null
     */
    public function findByRememberToken(int $id, string $token);

    /**
     * Given a user object, will update the record
     * in the database. This is often a User entity
     * that already has the correct values set.
     *
     * @param array|object $data
     */
    public function save($data);
}
