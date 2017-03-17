<?php

namespace App;

trait HasApiTokenSecrets
{
    /**
     * The current authentication token in use.
     *
     * @var \App\TokenSecret
     */
    protected $currentToken;

    /**
     * Get all of the API tokens for the user.
     */
    public function tokens()
    {
        return $this->hasMany(TokenSecret::class);
    }

    /**
     * Determine if the current API token is granted a given ability.
     *
     * @param  string  $ability
     * @return bool
     */
    public function tokenCan($ability)
    {
        return $this->currentToken ? $this->currentToken->can($ability) : false;
    }

    /**
     * Get the currently used API token for the user.
     *
     * @return \App\TokenSecret
     */
    public function token()
    {
        return $this->currentToken;
    }

    /**
     * Set the current API token for the user.
     *
     * @param  \App\TokenSecret  $token
     * @return $this
     */
    public function setToken(TokenSecret $token)
    {
        $this->currentToken = $token;

        return $this;
    }
}
