<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
            // Tabela Pessoas
        Schema::create('pessoas', function (Blueprint $table) {
            $table->integer('idPessoa')->primary();
            $table->string('nome', 40);
            $table->string('email', 30);
            $table->timestamps();
        });

        // Tabela Clientes
        Schema::create('clientes', function (Blueprint $table) {
            $table->integer('idCliente')->primary();
            $table->integer('idPessoa')->unique();
            $table->integer('status');
            $table->foreign('idPessoa')->references('idPessoa')->on('pessoas');
            $table->timestamps();
        });

        // Tabela Funcionarios
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->integer('idFuncionario')->primary();
            $table->integer('idPessoa')->unique();
            $table->integer('matricula');
            $table->string('login', 15);
            $table->string('senha', 10);
            $table->foreign('idPessoa')->references('idPessoa')->on('pessoas');
            $table->timestamps();
        });

        // Tabela Produtos
        Schema::create('produtos', function (Blueprint $table) {
            $table->integer('idProduto')->primary();
            $table->string('descricao', 30);
            $table->string('foto', 255)->nullable();
            $table->double('preco');
            $table->integer('estoque');
            $table->integer('tipo');
            $table->timestamps();
        });

        // Tabela Pedidos
        Schema::create('pedidos', function (Blueprint $table) {
            $table->integer('idPedido')->primary();
            $table->dateTime('horario');
            $table->double('total');
            $table->integer('idCliente');
            $table->integer('idFuncionario');
            $table->foreign('idCliente')->references('idCliente')->on('clientes');
            $table->foreign('idFuncionario')->references('idFuncionario')->on('funcionarios');
            $table->timestamps();
        });

        // Tabela Pagamentos
        Schema::create('pagamentos', function (Blueprint $table) {
            $table->integer('idPagamento')->primary();
            $table->integer('idPedido')->unique();
            $table->dateTime('horario');
            $table->double('valor');
            $table->integer('tipo');
            $table->foreign('idPedido')->references('idPedido')->on('pedidos');
            $table->timestamps();
        });

        // Tabela ItensPedidos
        Schema::create('itens_pedidos', function (Blueprint $table) {
            $table->integer('idPedido');
            $table->integer('numItem');
            $table->integer('idProduto');
            $table->double('valorUnitario');
            $table->integer('quantidade');
            $table->double('subtotal');
            $table->text('observacoes')->nullable();
            $table->integer('status');
            $table->primary(['idPedido', 'numItem']);
            $table->foreign('idPedido')->references('idPedido')->on('pedidos');
            $table->foreign('idProduto')->references('idProduto')->on('produtos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
