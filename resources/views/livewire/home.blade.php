<div class="min-h-[100vh] overflow-hidden pb-40 pt-32">
    <div class="relative">
        <div class="items-center justify-center px-4 md:px-40">
            <div>
                <div
                    class="bg-primary pointer-events-none absolute start-20 aspect-square w-96 rounded-full opacity-20 blur-3xl">
                </div>
                <div
                    class="bg-success pointer-events-none absolute aspect-square w-full rounded-full opacity-10 blur-3xl">
                </div>

                <div class="card bg-transparent text-neutral-content w-full lg:px-20">
                    <div class="card-body items-center text-center">
                        <h2 class="card-title">Encrypt-Decrypt: MD5, AES, Base64, Bcrypt, SHA</h2>
                        <textarea wire:model="text" class="textarea textarea-primary w-full mb-8 mt-8"
                            placeholder="plaintext"></textarea>
                        <h4>Type</h4>
                        <div class="flex gap-x-4 items-center justify-center">
                            <label>
                                <input type="radio" wire:model="method" value="md5" class="radio radio-primary" />
                                MD5
                            </label>

                            <label>
                                <input type="radio" wire:model="method" value="base64" class="radio radio-primary" />
                                Base64
                            </label>
                            <label>
                                <input type="radio" wire:model="method" value="aes" class="radio radio-primary" />
                                AES
                            </label>
                            <label>
                                <input type="radio" wire:model="method" value="bcrypt" class="radio radio-primary" />
                                Bcrypt
                            </label>

                            <label>
                                <input type="radio" wire:model="method" value="sha" class="radio radio-primary" />
                                SHA
                            </label>
                        </div>
                        <div class="card-actions justify-end mt-4">
                            <button wire:click="encrypt" class="btn btn-primary">Encrypt</button>
                            <button wire:click="decrypt" class="btn btn-secondary">Decrypt</button>
                            @if ($encryptedText || $decryptedText)
                            <button wire:click="resetFields" class="btn btn-outline">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                                  </svg>
                            </button>
                        @endif
                        </div>

                        <!-- Display encrypted and decrypted results -->
                        @if ($encryptedText)
                            <div class="mt-4">
                                <h4>Encrypted Text:</h4>
                                <p class="text-primary">
                                    <span id="encryptedText">{{ $encryptedText }}</span>
                                    <button onclick="copyToClipboard()" class="btn btn-ghost text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                                          </svg>
                                    </button>
                                </p>
                            </div>
                        @endif
                        @if ($decryptedText)
                            <div class="mt-4">
                                <h4>Decrypted Text:</h4>
                                <p class="text-success">{{ $decryptedText }}</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function copyToClipboard() {
        const encryptedText = document.getElementById('encryptedText').textContent;

        navigator.clipboard.writeText(encryptedText)
            .then(() => {
                alert('Text copied to clipboard!');
            })
            .catch(err => {
                console.error('Failed to copy text: ', err);
            });
    }
</script>
