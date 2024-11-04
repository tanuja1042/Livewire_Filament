<div class="contact-form-container">
    @if ($successMessage)
        <div class="success-message">{{ $successMessage }}</div>
    @endif

    <form wire:submit.prevent="submitForm">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" wire:model="name" class="form-input">
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" wire:model="email" class="form-input">
            @error('email') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" wire:model="message" class="form-input"></textarea>
            @error('message') <span class="error">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="submit-button">Send Message</button>
    </form>
</div>
