<div>
    <h3>{{$counter}}</h3>
    <button class=" btn btn-success" wire:click="increase">increase</button>
    <button class=" btn btn-danger" wire:click="decrease">decrease</button>
    <div class="d-flex">
    <button class=" btn btn-warning" wire:click="increaseByNumber(5)">increase by 5</button>
    <button class=" btn btn-dark" wire:click="decreaseByNumber(3)">decrease by 3</button>  
    </div>
</div>
