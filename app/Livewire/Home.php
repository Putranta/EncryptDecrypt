<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use phpseclib3\Crypt\AES;
use Illuminate\Support\Facades\Hash;

class Home extends Component
{
    public $text;
    public $method = 'aes';
    public $encryptedText;
    public $decryptedText;
    public $publicKey = "";
    public $privateKey = "";

    private $salt;

    public function mount()
    {
        $this->salt = 'Putranta'; // Set salt sebagai 'Putranta'
    }

    public function encrypt()
    {
        // Gabungkan salt dengan teks sebelum enkripsi
        $textWithSalt = $this->text . $this->salt;

        switch ($this->method) {
            case 'aes':
                $this->encryptedText = $this->encryptAES($textWithSalt);
                break;
            case 'base64':
                $this->encryptedText = base64_encode($textWithSalt);
                break;
            case 'bcrypt':
                $this->encryptedText = $this->encryptBcrypt($textWithSalt);
                break;
            case 'md5':
                $this->encryptedText = md5($textWithSalt);
                break;
            case 'sha':
                $this->encryptedText = hash('sha256', $textWithSalt);
                break;
        }
        $this->decryptedText = null; // Reset hasil dekripsi
    }

    public function decrypt()
    {
        switch ($this->method) {
            case 'aes':
                $this->decryptedText = $this->decryptAES($this->encryptedText);
                break;
            case 'base64':
                $this->decryptedText = base64_decode($this->encryptedText);
                break;
            case 'bcrypt':
                $this->decryptedText = 'Bcrypt cannot be decrypted';
                break;
            case 'md5':
                $this->decryptedText = 'MD5 is a hashing algorithm and cannot be decrypted';
                break;
            case 'sha':
                $this->decryptedText = 'SHA is a hashing algorithm and cannot be decrypted';
                break;
        }
    }

    private function encryptAES($data)
    {
        $aes = new AES('cbc');
        $aes->setPassword($this->salt);

        // Generate a random IV
        $iv = random_bytes(16);
        $aes->setIV($iv);

        // Encrypt the data
        $encryptedData = $aes->encrypt($data);

        // Return IV + Encrypted data as base64
        return base64_encode($iv . $encryptedData);
    }

    private function decryptAES($data)
    {
        $data = base64_decode($data);

        // Extract the IV (first 16 bytes)
        $iv = substr($data, 0, 16);
        $encryptedData = substr($data, 16);

        $aes = new AES('cbc');
        $aes->setPassword($this->salt);
        $aes->setIV($iv);

        // Decrypt the data
        $decryptedData = $aes->decrypt($encryptedData);

        // Remove salt if present
        if (substr($decryptedData, -strlen($this->salt)) === $this->salt) {
            $decryptedData = substr($decryptedData, 0, -strlen($this->salt));
        }

        return $decryptedData;
    }

    private function encryptBcrypt($data)
    {
        return Hash::make($data . $this->salt);
    }

    public function resetFields()
    {
        $this->text = null;
        $this->encryptedText = null;
        $this->decryptedText = null;
        $this->method = 'aes';
    }

    #[Layout('layouts.guest')]
    public function render()
    {
        return view('livewire.home');
    }
}
