<?php 

include_once(__DIR__.'/../vendor/autoload.php'); //Fazer a ligação

// use App\Model\Pessoa;
use App\Persistence\ConnectionFactory; //Conectar com outras pastas
use App\DTOS\SensorDTO;

// new Pessoa(); //Criar pessoa
$connFactory = new ConnectionFactory(); //Conexão
$conn = $connFactory-> getInstance();

$sqlUseDB = "USE chamadasonline;"; //Criar banco de dados
$stmt = $conn -> query($sqlUseDB);

$sensorDTO_1 = new SensorDTO(30, 300); //Configurar sensor
$sensorDTO_2 = new SensorDTO(40, 400);

$sqlInsertData = "INSERT INTO clima_tempo (temperatura, umidade) VALUES "; //Inserir dados
$conn->exec($sqlInsertData."(".$sensorDTO_1->_temperatura.",".$sensorDTO_1->_umidade.");");
$conn->exec($sqlInsertData."(".$sensorDTO_2->_temperatura.",".$sensorDTO_2->_umidade.");");

$sqlSelectData = "SELECT * FROM clima_tempo;"; //Puxar o clima

$stmt = $conn->query($sqlSelectData);
$sensorDataArr = $stmt->fetchAll(\PDO::FETCH_ASSOC);

echo "<br></br>temperatura -- umidade <br></br>";

foreach($sensorDataArr as $sensorData){
    echo "<br></br>".$sensorData['temperatura']." -- ".$sensorData['umidade'];
}


// echo date("d-M-Y"); //Definir data