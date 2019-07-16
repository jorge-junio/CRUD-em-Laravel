<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Clientes
                    <a class="" style="loca" href="<?php echo e(route('clientesNovo')); ?>"> Novo Cliente </a>
                </div>

                <?php if(Session::has('mensagem_sucesso')): ?>
                    <div class="alert alert-sucess" role="alert"> <?php echo e(Session::get('mensagem_sucesso')); ?> </div>
                <?php endif; ?>

                <div class="card-body">
                    <table class="table">
                        
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Endereço</th>
                        <th>Número</th>
                        <th>Ações</th>
                        <tbody>
                            <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td> <?php echo e($cliente->id); ?> </td>
                                <td> <?php echo e($cliente->nome); ?> </td>
                                <td> <?php echo e($cliente->endereco); ?> </td>
                                <td> <?php echo e($cliente->numero); ?> </td>
                                <td>
                                    <a href="/clientes/<?php echo e($cliente->id); ?>/editar" class="btn btn-sm">Editar</a>
                                    <a href="/clientes/<?php echo e($cliente->id); ?>/excluir" class="btn btn-sm">Excluir</a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>             
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/lais/Documents/laravel/resources/views/clientes/lista.blade.php ENDPATH**/ ?>