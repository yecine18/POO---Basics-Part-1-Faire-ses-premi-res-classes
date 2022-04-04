<?PHP 
class Car
{
    private int $nbWheels;
    private int $currentSpeed;
    private string $color; 
    private int $nbSeats;
    private string $typeEnergy;
    private string $levelEnergy;

public function __construct(string $color,int $nbSeat,string $typeEnergy )
{
    $this->color = $color;
    $this->nbSeat = $nbSeat;
    $this->energy = $typeEnergy;

    
}
public function getNbWheels(): int
{
    return $this->nbWheels;
}

public function setNbWheels(int $nbWheels): void
{
    $this->nbWheels = $nbWheels;
}

public function getCurrentSpeed(): int
{
    return $this->currentSpeed;
}

public function setCurrentSpeed(int $currentSpeed): void
{
    $this->currentSpeed = $currentSpeed;
}
public function getColor(): string
{
    return $this->color;    
}
public function setColor(string $color): void
{
    $this->color = $color;
}
public function getNbSeats(): int
{
    return $this->nbSeats;
}
public function setNbSeats(int $nbSeats): void
{
    $this->nbSeats = $nbSeats;
}
public function getTypeEnergy(): string
{
    return $this->typeEnergy;
}
public function setTypeEnergy(string $typeEnergy): void
{
    $this->typeEnergy = $typeEnergy;
}
public function getLevelEnergy(): string
{
    return $this->levelEnergy;
}
function start()
{
    $this->currentSpeed = 0;
    return $this->currentSpeed;
}
function forward(): void
{
    $this->currentSpeed = 15;
}
function brake(): void
{
    $this->currentSpeed = 0;

}
}



