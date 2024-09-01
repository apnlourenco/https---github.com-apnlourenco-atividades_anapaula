<?php 

echo "Qual o indice de poluicao medido: ";
$indice = (float) fgets(STDIN);

$poluicao = new Poluicao($indice);
echo $poluicao->emitirNotificacao();

class Poluicao {
    private $indice;

    public function __construct($indice) {
        $this->indice = $indice;
    } 
    public function emitirNotificacao() {
        if ($this->indice >= 0.05 && $this->indice <= 0.25) {
            return "Nivel de poluicao aceitável. \n";
        } elseif ($this->indice >=0.3 && $this->indice < 0.4) {
            return "Alerta: as ind´sutrias do grupo 1 devem suspender suas atividades";
        } elseif ($this->indice >= 0.4 && $this->indice < 0.5) {
            return "Alerta: as indústrias do grupo 1 e 2 devem suspender suas atividades";
        } elseif ($this->indice >= 0.5 && $this->indice < 0.5) {
            return "Alerta: todos os grupos devem suspender suas atividades";
        } else {
            return "Indice de fora do nível de poluicao.\n";
        }
    }
}
?>