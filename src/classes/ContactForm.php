<?php 

namespace App;

class ContactForm
{
    protected $input = [];

    protected $errors = [];

    public function __construct(array $post)
    {
        $this->input = $this->sanitise($post);
    }

    public function getInput($field = null)
    {
        if (!$field) {
            return $this->input;
        }
        return $this->input[$field] ?? null;
    }

    protected function sanitise(array $post)
    {
        return [
            'name' => isset($post['name']) ? htmlspecialchars(strip_tags($post['name'])) : null,
            'company' => isset($post['company']) ? htmlspecialchars(strip_tags($post['company'])) : null,
            'email' => isset($post['email']) ? htmlspecialchars(strip_tags($post['email'])) : null,
            'phone' => isset($post['phone']) ? htmlspecialchars(strip_tags($post['phone'])) : null,
            'message' => isset($post['message']) ? htmlspecialchars(strip_tags($post['message'])) : null,
            'marketing_preferences' => isset($post['marketing_preferences']) ? true : false,
        ];
    }

    public function validate()
    {
        if (!$this->input['name']) {
            $this->addError('A name is required.');
        }
        if (!$this->input['email']) {
            $this->addError('An email address is required.');
        }
        if (!$this->input['phone']) {
            $this->addError('A telephone number is required.');
        }
        $phoneVal = str_replace(' ', '', $this->input['phone']);
        if (!is_numeric($phoneVal) || strlen($phoneVal) != 11) {
            $this->addError('The telephone number format is incorrect.');
        }
        if (!$this->input['message']) {
            $this->addError('A message is required.');
        }
        if (strlen($this->input['message']) < 5) {
            $this->addError('The message must be at least 5 characters.');
        }

        return !$this->hasErrors();
    }

    protected function addError(string $msg)
    {
        $this->errors[] = $msg;
    }

    public function hasErrors()
    {
        return !empty($this->errors);
    }

    public function getErrors()
    {
        return $this->errors;
    }
}