<?php

use App\Question;
use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            [
                'question' => 'Cuál es la dirección que aparece en un segmento TCP?'
            ],
            [
                'question' => 'Qué octeto (s) es (son) asignado (s) para direccionar subredes en una dirección clase A con máscara 255.255.248.0?'
            ],
            [
                'question' => 'Cuántas direcciones de host(útiles) hay disponibles para una red de clase A con máscara 255.255.224.0?'
            ],
            [
                'question' => 'El puerto es:'
            ],
            [
                'question' => 'Cómo se denomina a la interfaz que conecta un router con su LAN?'
            ],
            [
                'question' => 'Qué filosofí­a de ruteo emplea BGP para determinar cuál es la mejor ruta a recorrer un paquete?'
            ],
            [
                'question' => 'Qué es BGP?'
            ],
            [
                'question' => ' La duración de un bit, la velocidad de propagación, las colisiones en el medio fí­sico son parámetros analógicos que mide directamente:'
            ],
            [
                'question' => 'Cuál de los siguientes campos en el encabezado de un fragmento TCP indica el espacio libre en buffer del receptor?'
            ],
            [
                'question' => ' Qué parte de la cabecera IP del datagrama analiza el router en el proceso de ruteo?'
            ],
            [
                'question' => ' Indique cuál de las siguientes afirmaciones es válida'
            ],
            [
                'question' => ' Cuál de las siguientes opciones describe más correctamente la dirección 192.168.0.255?'
            ],
            [
                'question' => ' Por qué se realiza una petición RARP?'
            ],
            [
                'question' => ' Cuál de la siguiente capa NO trabaja de extremo a extremo?'
            ],
            [
                'question' => ' DNS es'
            ],
            [
                'question' => ' WAP 2.0 es'
            ],
            [
                'question' => ' Cuántos pines utiliza un conector RJ45 para transmitir realmente?'
            ],
            [
                'question' => ' Cuántos pares no son utilizados en un patchcord RJ-45 Cat 5e'
            ],
            [
                'question' => ' Qué tipo de conector debe usarse para realizar una conexión con un cable coaxial de banda base en un esquema de cableado horizontal?'
            ],
            [
                'question' => ' Para armar un cable UTP en conexión cruzada entre 2 PCs utilizo en un extremo la norma 568A y en el otro la 568B'
            ],
            [
                'question' => ' Uno de los protocolos definidos para redes MAN es'
            ],
            [
                'question' => ' Una subred es una estructura que:'
            ],
            [
                'question' => ' Cómo se denomina a la conexión entre 2 routers en internet?'
            ],
            [
                'question' => ' Qué parte de la dirección IP del paquete entrante analiza el router durante la determinación de su ruta?'
            ],
            [
                'question' => ' Qué protocolo de internet asigna MAC a una IP conocida?'
            ],
            [
                'question' => 'Qué tipo de paquetes de datos enví­a una petición ARP a través de la red LAN?'
            ],
            [
                'question' => ' Qué tipo de mensaje utiliza una solicitud ARP?'
            ],
            [
                'question' => ' DHCP es un protocolo que'
            ],
            [
                'question' => ' Qué tipo de algoritmo de enrutamiento es OSPF'
            ],
            [
                'question' => ' Cuándo es útil el enrutamiento estático?'
            ],
            [
                'question' => ' Qué métrica utiliza RIP para sus tablas de ruteo?'
            ],
            [
                'question' => ' Cuál de las siguientes opciones son métricas que comunmente utilizan los routers para evaluar una ruta?'
            ],
            [
                'question' => ' TSAP es:'
            ],
            [
                'question' => ' Cuáles de las siguientes opciones corresponden a la ventana de congestión TCP?'
            ],
            [
                'question' => ' La ventana de congestión en TCP'
            ],
            [
                'question' => ' Qué dirección lleva el encabezado de TCP?'
            ],
            [
                'question' => ' La duración de cada bit en ms, la amplitud de pulso en voltios y las especificaciones mecánicas y eléctricas son consideraciones que especifica'
            ],
            [
                'question' => ' Cuál de los siguientes elementos comúnmente no forma parte de una subred?'
            ],
            [
                'question' => ' El protocolo de transporte de datos TCP es un servicio:'
            ],
            [
                'question' => ' Cuál de las siguientes opciones describe correctamente lo que es un ISP?'
            ],
            [
                'question' => ' Cuál es el resultado de la operación entre la dirección 198.47.47.83 y 255.255.255.192?'
            ],
            [
                'question' => ' Cuál es la capa del modelo OSI que le quita el encabezado a un segmento en el receptor?'
            ],
            [
                'question' => ' Cuántas direcciones de host (útiles) hay disponibles para una red de clase B con máscara 255.255.255.0'
            ],
            [
                'question' => ' El NSAP es:'
            ],
            [
                'question' => ' Cuál de las siguientes opciones es la que mejor describe enrutamiento desde el origen?'
            ],
            [
                'question' => 'La capa de enlace del transmisor incorpora un número de secuencia en cada trama para que el receptor pueda:'
            ],
            [
                'question' => ' Cuál de los siguientes protocolos puede ser utilizado por una WAN?'
            ],
            [
                'question' => 'En las redes IEEE 802.3, de 10 base T, el MTU es'
            ],
            [
                'question' => ' Dado un archivo de 1 Mbyte, indique cuántas tramas ethernet serí­an necesarias para transferir el archivo desde un host a otro dentro del mismo segmento de red'
            ],
            [
                'question' => 'Qué plug se utiliza en el cableado horizontal con cable trenzado sin blindar (UTP) categorí­a 5?'
            ],
            [
                'question' => ' Qué estándar IEEE pertenece a ethernet?'
            ],
            [
                'question' => 'Qué hace la función de conmutación de un router?'
            ],
            [
                'question' => ' El protocolo de la capa de enlace incorpora un número de acuse de recibo (ACK) para cada trama para:'
            ],
            [
                'question' => 'En un modelo de comunicaciones en capas, la capa n:'
            ],
            [
                'question' => ' Que octeto/s es(son) asignado/s para direccionar subredes en una dirección clase A con mascara 255.255.248.0?'
            ],
            [
                'question' => ' Cual de las siguientes capas del modelo OSI trabaja punto a punto en la subred?'
            ],
            [
                'question' => ' El NSAP (Network Service Access Point) es:'
            ],
            [
                'question' => 'Se envia un email desde el Host A hacia el Host B a traves de internet. Cual de las siguiente opciones es la que mejor describe que sucede cuando se encapsulan los datos?'
            ],
            [
                'question' => ' Una de las siguientes afirmaciones es válida:'
            ],
            [
                'question' => ' Una LAN en general:'
            ],
            [
                'question' => ' Una LAN en general:'
            ],
            [
                'question' => ' El protocolo de enlace de datos SLIP es un servicio:'
            ],
            [
                'question' => ' Cual es la dirección que aparece en el encabezado de un paquete IP?'
            ],
            [
                'question' => ' Qué cantidad de Hosts soporta una dirección IP de tipo C?'
            ],
            [
                'question' => 'Qué tipo de algoritmo de enrutamiento es OSPF?'
            ],
            [
                'question' => ' Qué capa utiliza los TSAP?'
            ],
            [
                'question' => ' Cuál de las siguientes opciones es un ejemplo de dirección de broadcast de clase A (sin subredes)?'
            ],
            [
                'question' => '¿Cuál es la capa del modelo OSI que analiza  y ordena los fragmentos de un paquete recibido en el destino de una transmisión?'
            ],
            [
                'question' => '¿Cuál es la dirección que aparece en una trama Ethernet?'
            ],
            [
                'question' => '¿Qué octeto/s es/son asignado/s para direccionar subredes en una dirección clase B con máscara 255.255.255.248?'
            ],
            [
                'question' => 'Se enví­a un mensaje de correo electrónico desde el Host A al Host B, a través de Internet. ¿Cuál de las siguientes opciones es la que mejor describe qué sucede cuando se encapsulan los datos?'
            ],
            [
                'question' => ' ¿Cuál de las siguientes afirmaciones se refiere a la Subcapa LLC en el modelo OSI?  '
            ],
            [
                'question' => '¿Cuáles de los siguientes algoritmos de ruteo admite balanceo de carga?'
            ],
            [
                'question' => ' ¿Cuáles de los siguientes algoritmos de ruteo admite balanceo de carga?'
            ],
            [
                'question' => 'Que es IGP?'
            ],
            [
                'question' => ' 14.\tCuantos hilos de cobre se utilizan en un patchcord Cat. 6 para Tx y Rx?'
            ],
            [
                'question' => ' ¿Cuál de las siguientes opciones en un ejemplo de dirección IP broadcast de clase A?'
            ],
            [
                'question' => '¿Cuál de los siguientes campos, en el encabezado de un fragmento IP, indica el desplazamiento dentro del paquete original?'
            ],
            [
                'question' => '¿Para qué sirve una Ruta Default?'
            ],
            [
                'question' => 'El protocolo de la capa de enlace incorpora un número de secuencia (SEC) y un número de acuse (ACK) en cada trama, para:'
            ],
            [
                'question' => '¿Para qué sirve una Ruta Default?'
            ],
            [
                'question' => 'El protocolo de la capa de enlace incorpora un número de secuencia (SEC) y un número de acuse (ACK) en cada trama, para:'
            ],
            [
                'question' => 'Indique cuál de las siguientes afirmaciones es válida:'
            ],
            [
                'question' => '¿Cuál de las siguientes opciones describe más correctamente la dirección 172.20.168.255?'
            ],
            [
                'question' => '¿Cuál es el resultado de la operación AND entre la dirección 198.54.47.79 y la máscara 255.255.255.254?'
            ],
            [
                'question' => '¿Por qué se realiza una petición RARP?'
            ],
            [
                'question' => ' La cantidad de puntas que tiene un conector de la red y para qué sirve cada una, ¿es una consideración de que capa del modelo OSI?'
            ],
            [
                'question' => ' El protocolo de transporte de datos TCP es un servicio:'
            ],
            [
                'question' => ' ICMP es un protocolo que:'
            ]
        ];
        foreach ($questions as $question) {
            Question::create([
                'question' => $question['question']
            ]);
        }
    }
}
