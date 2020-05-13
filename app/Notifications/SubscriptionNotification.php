<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SubscriptionNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected $email;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->email = $request->input('email');
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->greeting('Hola ' . $this->email . '!')
            ->subject('Confirmación de subscripción a ' . config('app.name'))
            ->line('¿Confirma su subscripción a nuestra lista de correos?')
            ->line('Ha recibido este correo ya que recibimos su solicitud de subscripcións a nuestra lista de correos. Por favor confirme su interes dando click a la siguiente liga: ')
            ->action('Si, agregarme a la lista', url('subscription/confirm/' . $this->email))
            ->line('Su dirección de correo se almacenará en nuestra base de datos de forma segura. No compartimos ni vendemos esta información con nadie.')
            ->line('Si usted no se subscribió a nuestra lista y no desea recibir correos de nosotros, simplemente no de click a la liga.');

    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
