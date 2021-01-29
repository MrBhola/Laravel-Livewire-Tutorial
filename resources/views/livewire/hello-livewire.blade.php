<div style="margin-left: 10rem">
    <h1>Welcome to Laravel Live Wire Series Episode 3</h1>
    <h2>Methodes or function call, Click events,Event and Target, mouse enter, keydown ,Submit Form & Set</h2>
    <h1>Name :{{$name}}</h1>
    <input type="text" wire:model="name">
    <form action="#" wire:submit.prevent="$set('name', 'Toney Stark')">
        <button>Reset</button>
    </form>
    <select name="" id="">

        <option wire:click="new('hello')">new</option>
    </select>



    <div class="w-2/5 p-1 text-center " wire:click="$set('isOpenModal', 'true')">
        <label class="labl">
            <input type="radio" name="radioname" value="one_value" />
            <div class="rounded-lg py-2 px-3">{{trans('strings.change')}}</div>
        </label>
    </div>
    @if($isOpenModal)
    hello
    <div class="d-flex justify-content-center align-items-center">
        <button wire:click="hello">
            <div class="btn btn-danger">
                <span class="text-base text-white-400 hover:text-white-300">{{trans('strings.close')}}</span>
            </div>
        </button>
    </div>
</div>
@endif

<style>
    input {
        height: 30px;
        width: 300px;
        font-size: 24px
    }

    select {
        font-size: 22px
    }

</style>
