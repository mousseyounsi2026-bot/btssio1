<?php
class Produit
{
    private int $id = 0;
    private string $nom;
    private string $description;
    private float $prix;
    private int $stock;
    public function __construct(string $nom, string $description, float $prix, int $stock)
    {
        $this->setNom($nom);
        $this->setDescription($description);
        $this->setPrix($prix);
        $this->setStock($stock);
    }

    public function getId(): int
    {
        return $this->id;
    }
    public function getNom(): string
    {
        return $this->nom;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPrix(): float
    {
        return $this->prix;
    }

    public function getStock(): int
    {
        return $this->stock;
    }
        public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setNom(string $nom): void
    {
        $this->nom = trim($nom);
    }

    public function setDescription(string $description): void
    {
        $this->description = trim($description);
    }

    public function setPrix(float $prix): void
    {
        if ($prix < 0) {
            $prix = 0;
        }
        $this->prix = $prix;
    }

    public function setStock(int $stock): void
    {
        if ($stock < 0) {
            $stock = 0;
        }
        $this->stock = $stock;
    }

}
