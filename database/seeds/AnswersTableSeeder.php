<?php

use App\Answer;
use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $answers = [
            [
                'answer' => 'Dirección IP destino',
                'correct' => false,
                'question_id' => 1,
            ],
            [
                'answer' => 'Puertos origen y destino',
                'correct' => true,
                'question_id' => 1,
            ],
            [
                'answer' => 'MAC origen y destino',
                'correct' => false,
                'question_id' => 1,
            ],
            [
                'answer' => 'Dirección Ip origen',
                'correct' => false,
                'question_id' => 1,
            ],
            [
                'answer' => 'Todas son incorrectas',
                'correct' => false,
                'question_id' => 1,
            ],
            [
                'answer' => 'El primero y el segundo octeto',
                'correct' => false,
                'question_id' => 2,
            ],
            [
                'answer' => 'El tercero y cuarto octeto',
                'correct' => false,
                'question_id' => 2,
            ],
            [
                'answer' => 'Sólo el último octeto',
                'correct' => false,
                'question_id' => 2,
            ],
            [
                'answer' => 'El segundo y el tercer octeto',
                'correct' => true,
                'question_id' => 2,
            ],
            [
                'answer' => 'Ninguna de las anteriores',
                'correct' => true,
                'question_id' => 2,
            ],
            [
                'answer' => '1022',
                'correct' => false,
                'question_id' => 3,
            ],
            [
                'answer' => '8190',
                'correct' => true,
                'question_id' => 3,
            ],
            [
                'answer' => '254',
                'correct' => false,
                'question_id' => 3,
            ],
            [
                'answer' => '4094',
                'correct' => false,
                'question_id' => 3,
            ],
            [
                'answer' => 'Ninguna de las anteriores',
                'correct' => false,
                'question_id' => 3,
            ],
            [
                'answer' => 'Una interfaz entre capa de transporte y capa de aplicación',
                'correct' => true,
                'question_id' => 4,
            ],
            [
                'answer' => 'Una interfaz entre capa 3 y capa 4 (OSI)',
                'correct' => false,
                'question_id' => 4,
            ],
            [
                'answer' => 'Una dirección utilizada en una conexión punto a punto',
                'correct' => false,
                'question_id' => 4,
            ],
            [
                'answer' => 'Un protocolo de capa 4 (OSI)',
                'correct' => false,
                'question_id' => 4,
            ],
            [
                'answer' => 'Una primitiva',
                'correct' => false,
                'question_id' => 4,
            ],
            [
                'answer' => 'Next Hop',
                'correct' => false,
                'question_id' => 5,
            ],
            [
                'answer' => 'Servidor default',
                'correct' => false,
                'question_id' => 5,
            ],
            [
                'answer' => 'Proxy determinado',
                'correct' => false,
                'question_id' => 5,
            ],
            [
                'answer' => 'Puerta de enlace predeterminada',
                'correct' => true,
                'question_id' => 5,
            ],
            [
                'answer' => 'Ninguna de las anteriores',
                'correct' => false,
                'question_id' => 5,
            ],
            [
                'answer' => 'Conteo a infinito',
                'correct' => false,
                'question_id' => 6,
            ],
            [
                'answer' => 'Estado de enlace',
                'correct' => false,
                'question_id' => 6,
            ],
            [
                'answer' => 'Distancia de kms',
                'correct' => false,
                'question_id' => 6,
            ],
            [
                'answer' => 'Retardos de congestión',
                'correct' => false,
                'question_id' => 6,
            ],
            [
                'answer' => 'Vector distancia',
                'correct' => true,
                'question_id' => 6,
            ],
            [
                'answer' => 'Un protocolo de enrutamiento estático',
                'correct' => false,
                'question_id' => 7,
            ],
            [
                'answer' => 'Un protocolo de enrutamiento interior',
                'correct' => false,
                'question_id' => 7,
            ],
            [
                'answer' => 'Un protocolo de enrutamiento por estado de enlace',
                'correct' => false,
                'question_id' => 7,
            ],
            [
                'answer' => 'Un protocolo de enrutamiento exterior',
                'correct' => true,
                'question_id' => 7,
            ],
            [
                'answer' => 'Un protocolo de enrutamiento estático y por estado de enlace',
                'correct' => false,
                'question_id' => 7,
            ],
            [
                'answer' => 'La capa de red',
                'correct' => false,
                'question_id' => 8,
            ],
            [
                'answer' => 'La subcapa MAC',
                'correct' => false,
                'question_id' => 8,
            ],
            [
                'answer' => 'La subcapa LCC',
                'correct' => false,
                'question_id' => 8,
            ],
            [
                'answer' => 'La interfaz de red',
                'correct' => true,
                'question_id' => 8,
            ],
            [
                'answer' => 'La capa fí­sica',
                'correct' => false,
                'question_id' => 8,
            ],
            [
                'answer' => 'Identificación de fragmento',
                'correct' => false,
                'question_id' => 9,
            ],
            [
                'answer' => 'Actualización de ventana',
                'correct' => true,
                'question_id' => 9,
            ],
            [
                'answer' => 'Tipo de servicio',
                'correct' => false,
                'question_id' => 9,
            ],
            [
                'answer' => 'Protocolo',
                'correct' => false,
                'question_id' => 9,
            ],
            [
                'answer' => 'Desplazamiento de fragmento',
                'correct' => false,
                'question_id' => 9,
            ],
            [
                'answer' => 'La dirección IP de origen',
                'correct' => false,
                'question_id' => 10,
            ],
            [
                'answer' => 'La dirección correspondiente al router del programa destino',
                'correct' => false,
                'question_id' => 10,
            ],
            [
                'answer' => 'La dirección IP origen y la dirección IP destino',
                'correct' => false,
                'question_id' => 10,
            ],
            [
                'answer' => 'La dirección IP destino',
                'correct' => true,
                'question_id' => 10,
            ],
            [
                'answer' => 'Todas las anteriores',
                'correct' => false,
                'question_id' => 10,
            ],
            [
                'answer' => 'El protocolo UDP posee un campo de actualización de ventana en su cabecera',
                'correct' => false,
                'question_id' => 11,
            ],
            [
                'answer' => 'Para una transmisión que no requiera alta confiabilidad o integridad de los datos, el protocolo TCP es la mejor opción',
                'correct' => false,
                'question_id' => 11,
            ],
            [
                'answer' => 'TCP es un protocolo liviano, sin control de flujo, que facilita las transmisiones de aplicaciones en tiempo real (voz y video)',
                'correct' => false,
                'question_id' => 11,
            ],
            [
                'answer' => 'TCP es un protocolo robusto comparándolo con UDP, por lo cual facilita la transmisión de aplicaciones que necesitan confiabilidad',
                'correct' => true,
                'question_id' => 11,
            ],
            [
                'answer' => 'Todas las opciones son correctas',
                'correct' => false,
                'question_id' => 11,
            ],
            [
                'answer' => 'Dirección privada de clase B',
                'correct' => false,
                'question_id' => 12,
            ],
            [
                'answer' => 'Dirección pública de broadcast de clase C',
                'correct' => false,
                'question_id' => 12,
            ],
            [
                'answer' => 'Dirección de un host en particular, dentro de una red clase C privada',
                'correct' => false,
                'question_id' => 12,
            ],
            [
                'answer' => 'Dirección privada clase C broadcast',
                'correct' => true,
                'question_id' => 12,
            ],
            [
                'answer' => 'El origen conoce la dirección IP del destino y requiere la MAC correspondiente',
                'correct' => false,
                'question_id' => 13,
            ],
            [
                'answer' => 'El origen conoce su dirección MAC pero no su dirección IP',
                'correct' => true,
                'question_id' => 13,
            ],
            [
                'answer' => 'El origen conoce su dirección MAC y busca la dirección fí­sica',
                'correct' => false,
                'question_id' => 13,
            ],
            [
                'answer' => 'Un origen busca la dirección IP de la puerta de enlace predeterminada',
                'correct' => false,
                'question_id' => 13,
            ],
            [
                'answer' => 'Presentación',
                'correct' => false,
                'question_id' => 14,
            ],
            [
                'answer' => 'Red',
                'correct' => true,
                'question_id' => 14,
            ],
            [
                'answer' => 'Aplicación',
                'correct' => false,
                'question_id' => 14,
            ],
            [
                'answer' => 'Sesión',
                'correct' => false,
                'question_id' => 14,
            ],
            [
                'answer' => 'Un conversor de códigos ASCII',
                'correct' => false,
                'question_id' => 15,
            ],
            [
                'answer' => 'Esquema de nombres relacionados con registros de recursos',
                'correct' => true,
                'question_id' => 15,
            ],
            [
                'answer' => 'Debe escribirse en mayúsculas',
                'correct' => false,
                'question_id' => 15,
            ],
            [
                'answer' => 'Visualiza el buzón de correo',
                'correct' => false,
                'question_id' => 15,
            ],
            [
                'answer' => 'Ninguna de las anteriores',
                'correct' => false,
                'question_id' => 15,
            ],
            [
                'answer' => 'Protocolo de aplicaciones inalámbricas versión 2',
                'correct' => true,
                'question_id' => 16,
            ],
            [
                'answer' => 'Protocolo de aplicaciones LAN web versión 2',
                'correct' => false,
                'question_id' => 16,
            ],
            [
                'answer' => 'Lenguaje de marcado versión 2',
                'correct' => false,
                'question_id' => 16,
            ],
            [
                'answer' => 'Soporta XHTML',
                'correct' => false,
                'question_id' => 16,
            ],
            [
                'answer' => 'Ninguna de las anteriores',
                'correct' => false,
                'question_id' => 16,
            ],
            [
                'answer' => '2',
                'correct' => true,
                'question_id' => 17,
            ],
            [
                'answer' => '4',
                'correct' => false,
                'question_id' => 17,
            ],
            [
                'answer' => '8',
                'correct' => false,
                'question_id' => 17,
            ],
            [
                'answer' => '2',
                'correct' => true,
                'question_id' => 18,
            ],
            [
                'answer' => '1',
                'correct' => false,
                'question_id' => 18,
            ],
            [
                'answer' => '4',
                'correct' => false,
                'question_id' => 18,
            ],
            [
                'answer' => '8',
                'correct' => false,
                'question_id' => 18,
            ],
            [
                'answer' => 'BNC',
                'correct' => true,
                'question_id' => 19,
            ],
            [
                'answer' => 'UTP5',
                'correct' => false,
                'question_id' => 19,
            ],
            [
                'answer' => 'JACK RJ-45',
                'correct' => false,
                'question_id' => 19,
            ],
            [
                'answer' => 'Ninguna respuesta es correcta',
                'correct' => false,
                'question_id' => 19,
            ],
            [
                'answer' => 'Verdadero',
                'correct' => true,
                'question_id' => 20,
            ],
            [
                'answer' => 'Falso',
                'correct' => false,
                'question_id' => 20,
            ],
            [
                'answer' => 'Token Bus',
                'correct' => false,
                'question_id' => 21,
            ],
            [
                'answer' => 'DQDB',
                'correct' => true,
                'question_id' => 21,
            ],
            [
                'answer' => 'Ethernet',
                'correct' => false,
                'question_id' => 21,
            ],
            [
                'answer' => 'FDDI',
                'correct' => false,
                'question_id' => 21,
            ],
            [
                'answer' => 'Ninguna respuesta es correcta',
                'correct' => false,
                'question_id' => 21,
            ],
            [
                'answer' => 'Codifica el número de red',
                'correct' => false,
                'question_id' => 22,
            ],
            [
                'answer' => 'Se utiliza para evitar problemas de dirección',
                'correct' => false,
                'question_id' => 22,
            ],
            [
                'answer' => 'Codifica los routers ISP',
                'correct' => false,
                'question_id' => 22,
            ],
            [
                'answer' => 'Utiliza una máscara',
                'correct' => true,
                'question_id' => 22,
            ],
            [
                'answer' => 'Ninguna respuesta es correcta',
                'correct' => false,
                'question_id' => 22,
            ],
            [
                'answer' => 'Intercambio',
                'correct' => false,
                'question_id' => 23,
            ],
            [
                'answer' => 'Handshake',
                'correct' => false,
                'question_id' => 23,
            ],
            [
                'answer' => 'Costo',
                'correct' => false,
                'question_id' => 23,
            ],
            [
                'answer' => 'Enlace punto a punto',
                'correct' => true,
                'question_id' => 23,
            ],
            [
                'answer' => 'La correspondiente al campo de red',
                'correct' => false,
                'question_id' => 24,
            ],
            [
                'answer' => 'La correspondiente al router próximo en la ruta',
                'correct' => false,
                'question_id' => 24,
            ],
            [
                'answer' => 'La dirección completa',
                'correct' => true,
                'question_id' => 24,
            ],
            [
                'answer' => 'La correspondiente al campo del host',
                'correct' => false,
                'question_id' => 24,
            ],
            [
                'answer' => 'TCP/IP',
                'correct' => false,
                'question_id' => 25,
            ],
            [
                'answer' => 'RARP',
                'correct' => false,
                'question_id' => 25,
            ],
            [
                'answer' => 'ARP',
                'correct' => true,
                'question_id' => 25,
            ],
            [
                'answer' => 'PAR',
                'correct' => false,
                'question_id' => 25,
            ],
            [
                'answer' => 'Paquete de información',
                'correct' => false,
                'question_id' => 26,
            ],
            [
                'answer' => 'Paquete ICMP',
                'correct' => false,
                'question_id' => 26,
            ],
            [
                'answer' => 'Paquete de multidifusión',
                'correct' => false,
                'question_id' => 26,
            ],
            [
                'answer' => 'Paquete broadcast',
                'correct' => true,
                'question_id' => 26,
            ],
            [
                'answer' => 'ICMP',
                'correct' => false,
                'question_id' => 27,
            ],
            [
                'answer' => 'De difusión',
                'correct' => true,
                'question_id' => 27,
            ],
            [
                'answer' => 'De información',
                'correct' => false,
                'question_id' => 27,
            ],
            [
                'answer' => 'Permite que una estación de trabajo reción iniciada transmita su dirección ethernet',
                'correct' => false,
                'question_id' => 28,
            ],
            [
                'answer' => 'Utiliza mensajes UDP que se enví­an por los routers',
                'correct' => false,
                'question_id' => 28,
            ],
            [
                'answer' => 'Permite asignar direcciones IP manual y automáticamente',
                'correct' => true,
                'question_id' => 28,
            ],
            [
                'answer' => 'Ninguna opción es correcta',
                'correct' => false,
                'question_id' => 28,
            ],
            [
                'answer' => 'Vector de distancia',
                'correct' => false,
                'question_id' => 29,
            ],
            [
                'answer' => 'Ruta más corta',
                'correct' => false,
                'question_id' => 29,
            ],
            [
                'answer' => 'Estado de enlace',
                'correct' => true,
                'question_id' => 29,
            ],
            [
                'answer' => 'Del tipo BGP',
                'correct' => false,
                'question_id' => 29,
            ],
            [
                'answer' => 'Si hay más de una ruta hacia el destino del paquete',
                'correct' => false,
                'question_id' => 30,
            ],
            [
                'answer' => 'Cuando el tráfico es muy variable',
                'correct' => false,
                'question_id' => 30,
            ],
            [
                'answer' => 'Cuando hace falta equilibrio de cargas',
                'correct' => false,
                'question_id' => 30,
            ],
            [
                'answer' => 'Cuando hay que configurar polí­ticas de ruteo',
                'correct' => true,
                'question_id' => 30,
            ],
            [
                'answer' => 'Ancho de banda',
                'correct' => false,
                'question_id' => 31,
            ],
            [
                'answer' => 'Hops',
                'correct' => true,
                'question_id' => 31,
            ],
            [
                'answer' => 'Retardos de cola',
                'correct' => false,
                'question_id' => 31,
            ],
            [
                'answer' => 'Retardos de congestión',
                'correct' => false,
                'question_id' => 31,
            ],
            [
                'answer' => 'Ninguna opción es correcta',
                'correct' => false,
                'question_id' => 31,
            ],
            [
                'answer' => 'Carga de EMI, número de conexiones DLCI, tasa de deterioro',
                'correct' => false,
                'question_id' => 32,
            ],
            [
                'answer' => 'Distancia, número de rutas default, relación seí±al a ruido',
                'correct' => false,
                'question_id' => 32,
            ],
            [
                'answer' => 'Máscaras de subred, campo de red de las direcciones y gateways de su tabla',
                'correct' => false,
                'question_id' => 32,
            ],
            [
                'answer' => 'Ancho de banda, carga del ví­nculo, retardo de encolamiento, congestión',
                'correct' => true,
                'question_id' => 32,
            ],
            [
                'answer' => 'Ninguna opción es correcta',
                'correct' => false,
                'question_id' => 32,
            ],
            [
                'answer' => 'Punto de acceso al servicio de red',
                'correct' => false,
                'question_id' => 33,
            ],
            [
                'answer' => 'Primitiva de transporte',
                'correct' => false,
                'question_id' => 33,
            ],
            [
                'answer' => 'Punto de acceso al servicio de transporte',
                'correct' => true,
                'question_id' => 33,
            ],
            [
                'answer' => 'Ninguna respuesta es correcta',
                'correct' => false,
                'question_id' => 33,
            ],
            [
                'answer' => 'Se ajusta dinámicamente',
                'correct' => true,
                'question_id' => 34,
            ],
            [
                'answer' => 'Es estática',
                'correct' => false,
                'question_id' => 34,
            ],
            [
                'answer' => 'Depende exclusivamente de la congestión de la red',
                'correct' => false,
                'question_id' => 34,
            ],
            [
                'answer' => 'Depende exclusivamente del espacio libre en el buffer del receptor',
                'correct' => false,
                'question_id' => 35,
            ],
            [
                'answer' => 'Depende exclusivamente de cuán congestionada está la subred de comunicaciones',
                'correct' => false,
                'question_id' => 35,
            ],
            [
                'answer' => 'Depende del tiempo seteado en el temporizador de retransmisión',
                'correct' => false,
                'question_id' => 35,
            ],
            [
                'answer' => 'Se ajusta dinámicamente',
                'correct' => true,
                'question_id' => 35,
            ],
            [
                'answer' => 'Se fija y se mantiene constante mientras no cambie el espacio libre en el buffer del receptor',
                'correct' => false,
                'question_id' => 35,
            ],
            [
                'answer' => 'IP de origen',
                'correct' => false,
                'question_id' => 36,
            ],
            [
                'answer' => 'IP de destino',
                'correct' => false,
                'question_id' => 36,
            ],
            [
                'answer' => 'Segmento tcp',
                'correct' => false,
                'question_id' => 36,
            ],
            [
                'answer' => 'TSAP de origen y destino',
                'correct' => true,
                'question_id' => 36,
            ],
            [
                'answer' => 'El medio fí­sico',
                'correct' => true,
                'question_id' => 37,
            ],
            [
                'answer' => 'La subcapa MAC',
                'correct' => false,
                'question_id' => 37,
            ],
            [
                'answer' => 'Los protocolos de la capa 1',
                'correct' => false,
                'question_id' => 37,
            ],
            [
                'answer' => 'Los protocolos de la capa 7',
                'correct' => false,
                'question_id' => 37,
            ],
            [
                'answer' => 'La interfaz de la capa fí­sica',
                'correct' => false,
                'question_id' => 37,
            ],
            [
                'answer' => 'Gateway',
                'correct' => true,
                'question_id' => 38,
            ],
            [
                'answer' => 'Router',
                'correct' => false,
                'question_id' => 38,
            ],
            [
                'answer' => 'Lí­nea de comunicación punto a punto',
                'correct' => false,
                'question_id' => 38,
            ],
            [
                'answer' => 'Conmutador',
                'correct' => false,
                'question_id' => 38,
            ],
            [
                'answer' => 'Ninguno',
                'correct' => false,
                'question_id' => 38,
            ],
            [
                'answer' => 'Sin acuse de conexión',
                'correct' => false,
                'question_id' => 39,
            ],
            [
                'answer' => 'Con acuse de conexión',
                'correct' => false,
                'question_id' => 39,
            ],
            [
                'answer' => 'Con acuse orientado a la conexión',
                'correct' => true,
                'question_id' => 39,
            ],
            [
                'answer' => 'Ninguna opción es correcta',
                'correct' => false,
                'question_id' => 39,
            ],
            [
                'answer' => 'Proveedor de servicios de internet (Internet Service Provider)',
                'correct' => true,
                'question_id' => 40,
            ],
            [
                'answer' => 'Proveedor de servicios internos (Internal Service Provider)',
                'correct' => false,
                'question_id' => 40,
            ],
            [
                'answer' => 'Proveedor de seguridad en internet (Internet Security Provider)',
                'correct' => false,
                'question_id' => 40,
            ],
            [
                'answer' => 'Protección de servicio interno (Internal Service Protection)',
                'correct' => false,
                'question_id' => 40,
            ],
            [
                'answer' => '198.47.0.0',
                'correct' => false,
                'question_id' => 41,
            ],
            [
                'answer' => '198.47.47.0',
                'correct' => false,
                'question_id' => 41,
            ],
            [
                'answer' => '198.47.47.64',
                'correct' => true,
                'question_id' => 41,
            ],
            [
                'answer' => '198.47.47.32',
                'correct' => false,
                'question_id' => 41,
            ],
            [
                'answer' => 'Capa 1',
                'correct' => false,
                'question_id' => 42,
            ],
            [
                'answer' => 'Capa 2',
                'correct' => false,
                'question_id' => 42,
            ],
            [
                'answer' => 'Capa 3',
                'correct' => false,
                'question_id' => 42,
            ],
            [
                'answer' => 'Capa 4',
                'correct' => true,
                'question_id' => 42,
            ],
            [
                'answer' => '252',
                'correct' => false,
                'question_id' => 43,
            ],
            [
                'answer' => '255',
                'correct' => false,
                'question_id' => 43,
            ],
            [
                'answer' => '254',
                'correct' => true,
                'question_id' => 43,
            ],
            [
                'answer' => '256',
                'correct' => false,
                'question_id' => 43,
            ],
            [
                'answer' => 'Un puerto',
                'correct' => true,
                'question_id' => 44,
            ],
            [
                'answer' => 'Un protocolo de capa de red',
                'correct' => false,
                'question_id' => 44,
            ],
            [
                'answer' => 'Un socket',
                'correct' => false,
                'question_id' => 44,
            ],
            [
                'answer' => 'Una interfaz',
                'correct' => false,
                'question_id' => 44,
            ],
            [
                'answer' => 'Ruta de distancia más corta previamente determinada que no tiene en cuenta ninguna otra mótrica',
                'correct' => false,
                'question_id' => 45,
            ],
            [
                'answer' => 'Ruta que se utiliza cuando el siguiente salto no está explí­citamente indicado en la tabla de enrutamiento',
                'correct' => false,
                'question_id' => 45,
            ],
            [
                'answer' => 'Ruta de emergencia que ingresa manualmente el administrador de una red, cuando se generan conflictos en el ruteo',
                'correct' => true,
                'question_id' => 45,
            ],
            [
                'answer' => 'Ruta que se utiliza cuando falla una parte de la topologí­a de internet',
                'correct' => false,
                'question_id' => 45,
            ],
            [
                'answer' => 'Reordenar tramas que lleguen fuera de ese orden',
                'correct' => false,
                'question_id' => 46,
            ],
            [
                'answer' => 'Detener duplicados',
                'correct' => false,
                'question_id' => 46,
            ],
            [
                'answer' => 'Reordenar tramas que lleguen fuera de orden y detectar duplicados',
                'correct' => true,
                'question_id' => 46,
            ],
            [
                'answer' => 'Ninguna respuesta es válida',
                'correct' => false,
                'question_id' => 46,
            ],
            [
                'answer' => 'Token Bus',
                'correct' => false,
                'question_id' => 47,
            ],
            [
                'answer' => '802.3',
                'correct' => false,
                'question_id' => 47,
            ],
            [
                'answer' => '802.5',
                'correct' => false,
                'question_id' => 47,
            ],
            [
                'answer' => '802.6',
                'correct' => false,
                'question_id' => 47,
            ],
            [
                'answer' => 'Ninguna opción es correcta',
                'correct' => true,
                'question_id' => 47,
            ],
            [
                'answer' => '1500 bytes',
                'correct' => true,
                'question_id' => 48,
            ],
            [
                'answer' => '1518 bytes',
                'correct' => false,
                'question_id' => 48,
            ],
            [
                'answer' => '1526 bytes',
                'correct' => false,
                'question_id' => 48,
            ],
            [
                'answer' => '1480 bytes',
                'correct' => false,
                'question_id' => 48,
            ],
            [
                'answer' => 'Ninguna respuesta es correcta',
                'correct' => false,
                'question_id' => 48,
            ],
            [
                'answer' => '800',
                'correct' => false,
                'question_id' => 49,
            ],
            [
                'answer' => '700',
                'correct' => true,
                'question_id' => 49,
            ],
            [
                'answer' => '650',
                'correct' => false,
                'question_id' => 49,
            ],
            [
                'answer' => 'Ninguna opción es correcta',
                'correct' => false,
                'question_id' => 49,
            ],
            [
                'answer' => 'RJ45',
                'correct' => true,
                'question_id' => 50,
            ],
            [
                'answer' => 'BNC',
                'correct' => false,
                'question_id' => 50,
            ],
            [
                'answer' => 'Otro',
                'correct' => false,
                'question_id' => 50,
            ],
            [
                'answer' => '802.3',
                'correct' => true,
                'question_id' => 51,
            ],
            [
                'answer' => '802.2',
                'correct' => false,
                'question_id' => 51,
            ],
            [
                'answer' => '802.5',
                'correct' => false,
                'question_id' => 51,
            ],
            [
                'answer' => '802.6',
                'correct' => false,
                'question_id' => 51,
            ],
            [
                'answer' => 'Ninguna opción es correcta',
                'correct' => false,
                'question_id' => 51,
            ],
            [
                'answer' => 'Permite que el router acepte un paquete por una interfaz, y lo redireccione a otra de sus interfaces con el objeto de que el paquete se encamine hacia el destino final',
                'correct' => true,
                'question_id' => 52,
            ],
            [
                'answer' => 'Intercambia el viejo encabezado de un paquete de datos (IP) por un nuevo encabezado, que incluye información sobre la ruta para el próximo router',
                'correct' => false,
                'question_id' => 52,
            ],
            [
                'answer' => 'Permite mayor throughput (rendimiento) y capacidad de multitarea en la subred de conmutaciones',
                'correct' => false,
                'question_id' => 52,
            ],
            [
                'answer' => 'Cambia al router el modo recibir y enviar al modo broadcast, cuando falla una parte de la red',
                'correct' => false,
                'question_id' => 52,
            ],
            [
                'answer' => 'Actualiza dinámicamente las entradas de su tabla de ruteo',
                'correct' => false,
                'question_id' => 52,
            ],
            [
                'answer' => 'Confirmar la recepción de las tramas',
                'correct' => true,
                'question_id' => 53,
            ],
            [
                'answer' => 'Sólo detectar duplicados',
                'correct' => false,
                'question_id' => 53,
            ],
            [
                'answer' => 'Reordenar tramas que lleguen fuera de orden y detectar duplicados',
                'correct' => false,
                'question_id' => 53,
            ],
            [
                'answer' => 'Confirmar la CORRECTA recepción de las tramas',
                'correct' => false,
                'question_id' => 53,
            ],
            [
                'answer' => 'Brinda servicios a la capa n+1',
                'correct' => false,
                'question_id' => 54,
            ],
            [
                'answer' => 'Utiliza primitivas para hablar con la capa n-1',
                'correct' => false,
                'question_id' => 54,
            ],
            [
                'answer' => 'Utiliza un protocolo para hablar con la capa n de la otra maquina',
                'correct' => false,
                'question_id' => 54,
            ],
            [
                'answer' => 'A y C son correctas',
                'correct' => true,
                'question_id' => 54,
            ],
            [
                'answer' => 'Todas las anteriores',
                'correct' => false,
                'question_id' => 54,
            ],
            [
                'answer' => 'El primer y el segundo octeto',
                'correct' => false,
                'question_id' => 55,
            ],
            [
                'answer' => 'El tercero y el cuarto octeto',
                'correct' => false,
                'question_id' => 55,
            ],
            [
                'answer' => 'Solo el ultimo octeto',
                'correct' => false,
                'question_id' => 55,
            ],
            [
                'answer' => 'El segundo y el tercer octeto',
                'correct' => true,
                'question_id' => 55,
            ],
            [
                'answer' => 'Ninguna de las anteriores',
                'correct' => false,
                'question_id' => 55,
            ],
            [
                'answer' => 'Presentacion',
                'correct' => false,
                'question_id' => 56,
            ],
            [
                'answer' => 'Enlace',
                'correct' => true,
                'question_id' => 56,
            ],
            [
                'answer' => 'Aplicación',
                'correct' => false,
                'question_id' => 56,
            ],
            [
                'answer' => 'Sesion',
                'correct' => false,
                'question_id' => 56,
            ],
            [
                'answer' => 'Un protocolo de la capa de red',
                'correct' => false,
                'question_id' => 57,
            ],
            [
                'answer' => 'Un puerto',
                'correct' => true,
                'question_id' => 57,
            ],
            [
                'answer' => 'Un socket',
                'correct' => false,
                'question_id' => 57,
            ],
            [
                'answer' => 'Una interfaz',
                'correct' => false,
                'question_id' => 57,
            ],
            [
                'answer' => 'Los datos se convierten directamente en binario',
                'correct' => false,
                'question_id' => 58,
            ],
            [
                'answer' => 'Los segmentos se colocan en una o mas tramas',
                'correct' => false,
                'question_id' => 58,
            ],
            [
                'answer' => 'A los datos se les agrega el encabezado de red',
                'correct' => false,
                'question_id' => 58,
            ],
            [
                'answer' => 'Los datos son segmentados',
                'correct' => true,
                'question_id' => 58,
            ],
            [
                'answer' => 'El protocolo TCP es preferible en todo tipo de situación al protocolo UDP.',
                'correct' => false,
                'question_id' => 59,
            ],
            [
                'answer' => 'El protocolo UDP es preferible en todo tipo de situación al protocolo TCP.',
                'correct' => false,
                'question_id' => 59,
            ],
            [
                'answer' => 'Para algunas aplicaciones el protocolo TCP es la mejor opción pero para otras lo es el protocolo UDP.',
                'correct' => true,
                'question_id' => 59,
            ],
            [
                'answer' => 'TCP es un prtocolo liviano que facilita las transmisiones de aplicaciones en tiempo real (voz y video), contrariamente a UDP el cual agrega un gran overhead a cada paquete de datos.',
                'correct' => false,
                'question_id' => 59,
            ],
            [
                'answer' => 'Utiliza difusión.',
                'correct' => false,
                'question_id' => 60,
            ],
            [
                'answer' => 'Utiliza punto a punto.',
                'correct' => false,
                'question_id' => 60,
            ],
            [
                'answer' => 'Opera a 100-1000 Mbps.',
                'correct' => false,
                'question_id' => 60,
            ],
            [
                'answer' => 'Opera a velocidades menores a 100 Mbps.',
                'correct' => false,
                'question_id' => 60,
            ],
            [
                'answer' => 'Todas las anteriores son correctas.',
                'correct' => true,
                'question_id' => 60,
            ],            
            [
                'answer' => 'Utiliza difusión.',
                'correct' => false,
                'question_id' => 61,
            ],
            [
                'answer' => 'Utiliza punto a punto.',
                'correct' => false,
                'question_id' => 61,
            ],
            [
                'answer' => 'Opera a 100-1000 Mbps.',
                'correct' => false,
                'question_id' => 61,
            ],
            [
                'answer' => 'Opera a velocidades menores a 100 Mbps.',
                'correct' => false,
                'question_id' => 61,
            ],
            [
                'answer' => 'Todas las anteriores son correctas.',
                'correct' => true,
                'question_id' => 61,
            ],
            [
                'answer' => 'Sin acuse, sin conexión.',
                'correct' => true,
                'question_id' => 62,
            ],
            [
                'answer' => 'Con acuse, sin conexión.',
                'correct' => false,
                'question_id' => 62,
            ],
            [
                'answer' => 'Con acuse, orientado a la conexión.',
                'correct' => false,
                'question_id' => 62,
            ],
            [
                'answer' => 'Ninguna de las anteriores.',
                'correct' => false,
                'question_id' => 62,
            ],
            [
                'answer' => 'Dirección IP destino.',
                'correct' => false,
                'question_id' => 63,
            ],
            [
                'answer' => 'Dirección IP origen y dirección IP destino.',
                'correct' => true,
                'question_id' => 63,
            ],
            [
                'answer' => 'Dirección IP y la dirección IP del próximo hop.',
                'correct' => false,
                'question_id' => 63,
            ],
            [
                'answer' => 'Dirección IP de origen.',
                'correct' => false,
                'question_id' => 63,
            ],
            [
                'answer' => 'Dirección IP del Gateway de salida.',
                'correct' => false,
                'question_id' => 63,
            ],
            [
                'answer' => '256',
                'correct' => false,
                'question_id' => 64,
            ],
            [
                'answer' => '252',
                'correct' => false,
                'question_id' => 64,
            ],
            [
                'answer' => '250',
                'correct' => false,
                'question_id' => 64,
            ],
            [
                'answer' => 'Ninguna de las anteriores.',
                'correct' => true,
                'question_id' => 64,
            ],
            [
                'answer' => 'Vector de distancia.',
                'correct' => false,
                'question_id' => 65,
            ],
            [
                'answer' => 'Ruta más corta.',
                'correct' => false,
                'question_id' => 65,
            ],
            [
                'answer' => 'Estado de Enace.',
                'correct' => true,
                'question_id' => 65,
            ],
            [
                'answer' => 'Del tipo BGP.',
                'correct' => false,
                'question_id' => 65,
            ],
            [
                'answer' => 'Capa 1.',
                'correct' => false,
                'question_id' => 66,
            ],
            [
                'answer' => 'Capa 2.',
                'correct' => false,
                'question_id' => 66,
            ],
            [
                'answer' => 'Capa 3.',
                'correct' => false,
                'question_id' => 66,
            ],
            [
                'answer' => 'Capa 4.',
                'correct' => true,
                'question_id' => 66,
            ],
            [
                'answer' => '21.218.253.255',
                'correct' => false,
                'question_id' => 67,
            ],
            [
                'answer' => '125.255.255.255',
                'correct' => true,
                'question_id' => 67,
            ],
            [
                'answer' => '128.255.255.255',
                'correct' => false,
                'question_id' => 67,
            ],
            [
                'answer' => '19.12.255.255',
                'correct' => false,
                'question_id' => 67,
            ],
            [
                'answer' => 'Ninguna de las anteriores.',
                'correct' => false,
                'question_id' => 67,
            ],
            [
                'answer' => 'a. La capa 1',
                'correct' => false,
                'question_id' => 68,
            ],
            [
                'answer' => 'b. La capa 2',
                'correct' => false,
                'question_id' => 68,
            ],
            [
                'answer' => 'c. La capa 3',
                'correct' => true,
                'question_id' => 68,
            ],
            [
                'answer' => 'd. La capa 4',
                'correct' => false,
                'question_id' => 68,
            ],
            [
                'answer' => 'a. Dirección IP destino',
                'correct' => false,
                'question_id' => 69,
            ],
            [
                'answer' => 'b. Puertos origen y destino ',
                'correct' => false,
                'question_id' => 69,
            ],
            [
                'answer' => 'c. MAC origen y destino',
                'correct' => true,
                'question_id' => 69,
            ],
            [
                'answer' => 'd. Dirección IP origen',
                'correct' => false,
                'question_id' => 69,
            ],
            [
                'answer' => 'e. Ninguna de las anteriores',
                'correct' => false,
                'question_id' => 69,
            ],
            [
                'answer' => 'a. El primero y segundo octeto',
                'correct' => false,
                'question_id' => 70,
            ],
            [
                'answer' => 'b. El tercero y cuarto octeto',
                'correct' => true,
                'question_id' => 70,
            ],
            [
                'answer' => 'c. Sólo el último octeto',
                'correct' => false,
                'question_id' => 70,
            ],
            [
                'answer' => 'd. El segundo y el tercero',
                'correct' => false,
                'question_id' => 70,
            ],
            [
                'answer' => 'a. Las tramas se colocan en uno o más paquetes',
                'correct' => false,
                'question_id' => 71,
            ],
            [
                'answer' => 'b. Los segmentos TCP se convierten directamente a formato binario',
                'correct' => false,
                'question_id' => 71,
            ],
            [
                'answer' => 'c. A los datos se les agrega un encabezado TCP',
                'correct' => true,
                'question_id' => 71,
            ],
            [
                'answer' => 'd. Los datagramas son transformados directamente en bits',
                'correct' => false,
                'question_id' => 71,
            ],
            [
                'answer' => 'e. A y B son correctas',
                'correct' => false,
                'question_id' => 71,
            ],
            [
                'answer' => 'a. Establece, mantiene y gestiona las sesiones entre las aplicaciones',
                'correct' => false,
                'question_id' => 72,
            ],
            [
                'answer' => 'b. Utiliza el esquema de direccionamiento del Protocolo de Internet para determinar cuál es la mejor ví­a para trasladar los datos de un lugar a otro',
                'correct' => false,
                'question_id' => 72,
            ],
            [
                'answer' => 'c. Utiliza una dirección fí­sica para proveer la transmisión a travós de los medios, manejando la notificación de errores y el control de flujo.',
                'correct' => false,
                'question_id' => 72,
            ],
            [
                'answer' => 'd. Provee medios elóctricos, mecánicos, de procedimiento y funcionales para activar y mantener el enlace entre los sistemas',
                'correct' => false,
                'question_id' => 72,
            ],
            [
                'answer' => 'e. Utiliza direcciones lógicas de un enlace punto a punto para proveer la transmisión fí­sica a travós de los medios, manejando la notificación de errores y el control de flujo.',
                'correct' => true,
                'question_id' => 72,
            ],
            [
                'answer' => 'RIP',
                'correct' => true,
                'question_id' => 73,
            ],
            [
                'answer' => 'EGP',
                'correct' => false,
                'question_id' => 73,
            ],
            [
                'answer' => 'a. RIP',
                'correct' => false,
                'question_id' => 74,
            ],
            [
                'answer' => 'b. EGP',
                'correct' => false,
                'question_id' => 74,
            ],
            [
                'answer' => 'c. OSPF',
                'correct' => true,
                'question_id' => 74,
            ],
            [
                'answer' => 'd. BGP',
                'correct' => false,
                'question_id' => 74,
            ],
            [
                'answer' => 'e. Ninguno de los anteriores',
                'correct' => false,
                'question_id' => 74,
            ],
            [
                'answer' => 'a. Un protocolo de enrutamiento estático',
                'correct' => false,
                'question_id' => 75,
            ],
            [
                'answer' => 'b. Un protocolo de enrutamiento dinámico',
                'correct' => true,
                'question_id' => 75,
            ],
            [
                'answer' => 'c. Un protocolo de enrutamiento que trabaja dentro de cada área de un SA',
                'correct' => false,
                'question_id' => 75,
            ],
            [
                'answer' => 'd. A y C son ciertas',
                'correct' => false,
                'question_id' => 75,
            ],
            [
                'answer' => 'e. B y C son ciertas',
                'correct' => false,
                'question_id' => 75,
            ],
            [
                'answer' => 'a. La misma cantidad que en un patchcord Cat. 5',
                'correct' => false,
                'question_id' => 76,
            ],
            [
                'answer' => 'b. Todos',
                'correct' => true,
                'question_id' => 76,
            ],
            [
                'answer' => 'c. 6',
                'correct' => false,
                'question_id' => 76,
            ],
            [
                'answer' => 'd. 4',
                'correct' => false,
                'question_id' => 76,
            ],
            [
                'answer' => 'a. 127.218.255.255',
                'correct' => false,
                'question_id' => 77,
            ],
            [
                'answer' => 'b. 125.255.255.254',
                'correct' => false,
                'question_id' => 77,
            ],
            [
                'answer' => 'c. 128.255.255.255',
                'correct' => false,
                'question_id' => 77,
            ],
            [
                'answer' => 'd. 0.255.255.255',
                'correct' => true,
                'question_id' => 77,
            ],
            [
                'answer' => 'e. Ninguna de las anteriores',
                'correct' => false,
                'question_id' => 77,
            ],
            [
                'answer' => 'a. Identificación de Fragmento',
                'correct' => false,
                'question_id' => 78,
            ],
            [
                'answer' => 'b. Actualización de ventana',
                'correct' => false,
                'question_id' => 78,
            ],
            [
                'answer' => 'c. Tipo de servicio',
                'correct' => false,
                'question_id' => 78,
            ],
            [
                'answer' => 'd. Offset',
                'correct' => true,
                'question_id' => 78,
            ],
            [
                'answer' => 'f. Ninguna de las anteriores',
                'correct' => false,
                'question_id' => 78,
            ],
            [
                'answer' => 'a. Para reemplazar una ruta no óptima',
                'correct' => false,
                'question_id' => 79,
            ],
            [
                'answer' => 'b. Para comunicar a los routers vecinos cuál es la mejor ruta hacia el destino',
                'correct' => false,
                'question_id' => 79,
            ],
            [
                'answer' => 'c. Para canalizar los paquetes cuyos destinos no son conocidos por el router',
                'correct' => true,
                'question_id' => 79,
            ],
            [
                'answer' => 'd. Sólo se utiliza cuando tengo una sola salida a Internet',
                'correct' => false,
                'question_id' => 79,
            ],
            [
                'answer' => 'e. Ninguna de las anteriores',
                'correct' => false,
                'question_id' => 79,
            ],
            [
                'answer' => 'a. Sólo confirmar la recepción de las tramas erróneas',
                'correct' => false,
                'question_id' => 80,
            ],
            [
                'answer' => 'b. Sólo detectar duplicados',
                'correct' => false,
                'question_id' => 80,
            ],
            [
                'answer' => 'c. Controlar el flujo de las tramas',
                'correct' => false,
                'question_id' => 80,
            ],
            [
                'answer' => 'd. Controlar los errores (CRC) en las tramas',
                'correct' => true,
                'question_id' => 80,
            ],
            [
                'answer' => 'e. A y C son correctas',
                'correct' => false,
                'question_id' => 80,
            ],
            [
                'answer' => 'a. Para reemplazar una ruta no óptima',
                'correct' => false,
                'question_id' => 81,
            ],
            [
                'answer' => 'b. Para comunicar a los routers vecinos cuál es la mejor ruta hacia el destino',
                'correct' => false,
                'question_id' => 81,
            ],
            [
                'answer' => 'c. Para canalizar los paquetes cuyos destinos no son conocidos por el router',
                'correct' => true,
                'question_id' => 81,
            ],
            [
                'answer' => 'd. Sólo se utiliza cuando tengo una sola salida a Internet',
                'correct' => false,
                'question_id' => 81,
            ],
            [
                'answer' => 'e. Ninguna de las anteriores',
                'correct' => false,
                'question_id' => 81,
            ],
            [
                'answer' => 'a. Sólo confirmar la recepción de las tramas erróneas',
                'correct' => false,
                'question_id' => 82,
            ],
            [
                'answer' => 'b. Sólo detectar duplicados',
                'correct' => false,
                'question_id' => 82,
            ],
            [
                'answer' => 'c. Controlar el flujo de las tramas',
                'correct' => false,
                'question_id' => 82,
            ],
            [
                'answer' => 'd. Controlar los errores (CRC) en las tramas',
                'correct' => true,
                'question_id' => 82,
            ],
            [
                'answer' => 'e. A y C son correctas',
                'correct' => false,
                'question_id' => 82,
            ],
            [
                'answer' => 'a. El protocolo TCP posee un campo de actualización de ventana en su cabecera',
                'correct' => true,
                'question_id' => 83,
            ],
            [
                'answer' => 'b. Para una transmisión que no requiera alta confiabilidad o integridad de los datos, el protocolo TCP es la mejor opción',
                'correct' => false,
                'question_id' => 83,
            ],
            [
                'answer' => 'c. TCP es un protocolo liviano que facilita las transmisiones de aplicaciones en tiempo real (voz y video)',
                'correct' => false,
                'question_id' => 83,
            ],
            [
                'answer' => 'd. TCP es un protocolo que agrega un pequeí±o encabezado (overhead) a los datos comparando con UDP, por lo cual facilita la transmisión de aplicaciones sensibles al retardo',
                'correct' => false,
                'question_id' => 83,
            ],
            [
                'answer' => 'e. Todas las opciones son correctas',
                'correct' => false,
                'question_id' => 83,
            ],
            [
                'answer' => 'a. Dirección privada de broadcast Clase B',
                'correct' => false,
                'question_id' => 84,
            ],
            [
                'answer' => 'b. Dirección pública de broadcast de Clase C',
                'correct' => false,
                'question_id' => 84,
            ],
            [
                'answer' => 'c. Dirección de un host particular dentro de una red Clase C',
                'correct' => false,
                'question_id' => 84,
            ],
            [
                'answer' => 'd. Dirección privada Clase B',
                'correct' => true,
                'question_id' => 84,
            ],
            [
                'answer' => 'a. 198.54.47.64',
                'correct' => false,
                'question_id' => 85,
            ],
            [
                'answer' => 'b. 198.54.47.78',
                'correct' => true,
                'question_id' => 85,
            ],
            [
                'answer' => 'c. 198.54.47.80',
                'correct' => false,
                'question_id' => 85,
            ],
            [
                'answer' => 'd. 198.54.47.32',
                'correct' => false,
                'question_id' => 85,
            ],
            [
                'answer' => 'a. Un origen conoce la dirección IP del destino y requiere la MAC correspondiente',
                'correct' => false,
                'question_id' => 86,
            ],
            [
                'answer' => 'b. Un origen conoce su dirección MAC pero no su dirección IP',
                'correct' => true,
                'question_id' => 86,
            ],
            [
                'answer' => 'c. El origen conoce su dirección IP y busca su dirección fí­sica',
                'correct' => false,
                'question_id' => 86,
            ],
            [
                'answer' => 'd. Un origen busca la dirección IP del destino de sus paquetes',
                'correct' => false,
                'question_id' => 86,
            ],
            [
                'answer' => 'Capa 1',
                'correct' => true,
                'question_id' => 87,
            ],
            [
                'answer' => 'Capa 2',
                'correct' => false,
                'question_id' => 87,
            ],
            [
                'answer' => 'Capa 3',
                'correct' => false,
                'question_id' => 87,
            ],
            [
                'answer' => 'Capa 4',
                'correct' => false,
                'question_id' => 87,
            ],
            [
                'answer' => 'Ninguna es correcta',
                'correct' => false,
                'question_id' => 87,
            ],
            [
                'answer' => 'Sin acuse, sin conexion',
                'correct' => false,
                'question_id' => 88,
            ],
            [
                'answer' => 'Con acuse, sin conexion',
                'correct' => false,
                'question_id' => 88,
            ],
            [
                'answer' => 'Con acuse orientado a la conexion',
                'correct' => true,
                'question_id' => 88,
            ],
            [
                'answer' => 'Ninguna de las anteriores',
                'correct' => false,
                'question_id' => 88,
            ],
            [
                'answer' => 'Informa si el paquete no fue entregado',
                'correct' => false,
                'question_id' => 89,
            ],
            [
                'answer' => 'Son mensajes de control',
                'correct' => false,
                'question_id' => 89,
            ],
            [
                'answer' => 'Informa cuando ocurren eventos particulares',
                'correct' => false,
                'question_id' => 89,
            ],
            [
                'answer' => 'Todas son correctas',
                'correct' => true,
                'question_id' => 89,
            ],
            [
                'answer' => 'Ninguna es correcta',
                'correct' => false,
                'question_id' => 89,
            ],
        ];
        foreach ($answers as $answer) {
            Answer::create([
                'answer' => $answer['answer'],
                'correct' => $answer['correct'],
                'question_id' => $answer['question_id'],
            ]);
        }
    }
}
