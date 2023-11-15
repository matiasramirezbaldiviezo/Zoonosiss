<?php
    namespace app\models\domain\entity;
    use app\models\domain\repository\DAOFactory;

    class animal{
        public int $id;
        public string $nombre;
        public string $genero;
        public string $direccion;
        public int $tipo_dueno ;
        public int $edad ;
        public string $especie;

        public function load(array $attributes) : static
    {
        foreach($attributes as $key => $value){
            $this->{$key} = $value;
        }

        return $this;
    }

    public static function getById(string $id): static 
    {
        $data = DAOFactory::getAnimalDAO()->getById($id);
        $model = new Animal();
        $model->load($data);
        return $model;
    }  
    
    public static function getAll(): array{
        return DAOFactory::getAnimalDAO()->getAll();
    }

    public function create() : int {
        return DAOFactory::getAnimalDAO()->create($this);
    }    

    public function update() : int {
        return DAOFactory::getAnimalDAO()->update($this);
    }

    public function delete() : int {
        return DAOFactory::getAnimalDAO()->delete($this);
    }
    
    } 
?>
