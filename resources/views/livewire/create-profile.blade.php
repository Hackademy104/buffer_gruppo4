<div>

    <form wire:submit.prevent='store'>
        <div class="mb-3">
          <label for="name" class="form-label">Inserisci il nome</label>
          <input wire:model.live='name' type="text" class="form-control" id="name">
        </div>
        <div class="mb-3">
          <label for="surname" class="form-label">Inserisci il cognome</label>
          <input wire:model.live='surname' type="text" class="form-control" id="surname">
        </div>
        <div class="mb-3">
          <label for="age" class="form-label">Inserisci l'età</label>
          <input wire:model.live='age' type="text" class="form-control" id="age">
        </div>
        <div class="mb-3">
          <label for="country" class="form-label">Inserisci la tua nazione</label>
          <input wire:model.live='country' type="text" class="form-control" id="country">
        </div>
        <div class="mb-3">
          <label for="sex" class="form-label">Inserisci il nome</label>
          <input wire:model.live='sex' type="text" class="form-control" id="sex">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</div>