<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EstadoFixture
 */
class EstadoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'estado';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idEstado' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 07:08:50',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 07:08:50',
            ],
        ];
        parent::init();
    }
}
