<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Informe os abaixo as informações do cliente
                    <a class="" style="loca" href="<?php echo e(route('clientes')); ?>"> Listagem de Cliente </a>
                </div>

                <div class="card-body">
                    <?php if(Session::has('mensagem_sucesso')): ?>
                        <div class="alert alert-sucess" role="alert"> <?php echo e(Session::get('mensagem_sucesso')); ?> </div>
                    <?php endif; ?>

                    <?php echo Form::open(['route'=> 'clientesSalvar']); ?>

                    
                    <?php echo Form::label('nome', 'Nome'); ?>

                    <?php echo Form::input('text', 'nome', '', ['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome']); ?>

                    
                    <?php echo Form::label('endereco', 'Endereço'); ?>

                    <?php echo Form::input('text', 'endereco', '', ['class' => 'form-control', 'placeholder' => 'Endereço']); ?>

                    
                    <?php echo Form::label('numero', 'Número'); ?>

                    <?php echo Form::input('text', 'numero', '', ['class' => 'form-control', 'placeholder' => 'Número']); ?>

                    
                    <?php echo Form::submit('Enviar', ['class' => 'btn btn-primary' ]); ?>

                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/lais-is_4/Documents/laravel/resources/views/clientes/novo.blade.php ENDPATH**/ ?>