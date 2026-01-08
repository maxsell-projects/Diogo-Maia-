<?php

namespace App\Http\Controllers;

use App\Mail\ContactLead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    /**
     * Processa o formulário de contacto e envia o email.
     */
    public function send(Request $request)
    {
        // 1. Validação rigorosa (Senior Style)
        $validated = $request->validate([
            'name'    => 'required|string|min:3|max:255',
            'phone'   => 'nullable|string|max:20',
            'email'   => 'required|email|max:255',
            'subject' => 'required|string',
            'message' => 'required|string|min:10|max:2000',
        ]);

        try {
            // 2. Envio do Email
            // Destinatário definido conforme o email profissional do Diogo Maia
            Mail::to('dmgmaia@remax.pt')->send(new ContactLead($validated));

            // 3. Resposta de Sucesso
            return back()->with('success', 'A sua mensagem foi enviada com sucesso! Entraremos em contacto brevemente.');

        } catch (\Exception $e) {
            // 4. Tratamento de Erro e Log (Essencial em produção)
            Log::error('Erro ao enviar email de contacto: ' . $e->getMessage());

            return back()
                ->withInput()
                ->with('error', 'Infelizmente ocorreu um erro ao enviar a sua mensagem. Por favor, tente novamente ou contacte-nos via WhatsApp.');
        }
    }
}