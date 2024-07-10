// tests/UsuariosModelTest.php

use PHPUnit\Framework\TestCase;

class UsuariosModelTest extends TestCase
{
    public function testUserCanBeCreated()
    {
        $usuario = new UsuariosModel();
        $this->assertInstanceOf(UsuariosModel::class, $usuario);
    }
}
