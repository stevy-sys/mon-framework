<?php

namespace Core\Validation;

class Validator {

    private $data;
    private $errors;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * rules prend les $_POST et cle qui contient tableau de validation
     *
     * @param array $rules
     * @return array|null
     */
    public function validate(array $rules): ?array
    {
        foreach ($rules as $name => $rulesArray) {
            //print_r($rulesArray);
            if (array_key_exists($name, $this->data)) {
                foreach ($rulesArray as $rule) {
                    switch ($rule) {
                        case 'required':
                            $this->required($name, $this->data[$name]);
                            break;
                        case substr($rule, 0, 3) === 'min':
                            $this->min($name, $this->data[$name], $rule);
                        default:
                            # code...
                            break;
                    }
                }
            }
        }

        return $this->getErrors();
    }

    /**
     * champ est required
     *
     * @param string $name
     * @param string $value
     * @return void
     */
    private function required(string $name, string $value)
    {
        $value = trim($value);

        if (!isset($value) || is_null($value) || empty($value)) {
            $this->errors[$name][] = "{$name} est requis.";
        }
    }

    /**
     * minimum de longueur de texte
     *
     * @param string $name
     * @param string $value
     * @param string $rule
     * @return void
     */
    private function min(string $name, string $value, string $rule)
    {
        preg_match_all('/(\d+)/', $rule, $matches);
        $limit = (int) $matches[0][0];

        if (strlen($value) < $limit) {
            $this->errors[$name][] = "{$name} doit comprendre un minimum de {$limit} caractères";
        }
    }

    /**
     * return l'erreur
     *
     * @return array|null
     */
    private function getErrors(): ?array
    {
        return $this->errors;
    }
}
