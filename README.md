# Сервиса для рассылки уведомлений

Для рспределенной отправки таких уведомлений можно использовать очереди.

Чтобы внедрить такую систему, вы можете создать новый сервис, который будет помещать задачи в очередь.

```
class QueueService
{
    private $queue;

    public function __construct(Queue $queue)
    {
        $this->queue = $queue;
    }

    public function addToQueue(User $user, Notification $notification)
    {
        $this->queue->push([
            'user' => $user,
            'notification' => $notification,
        ]);
    }
}

```

Здесь Queue — это абстрактный класс, который может быть реализован с использованием различных технологий для очередей, таких как RabbitMQ или Redis.

Воркеры, которые работают в фоновом режиме, затем могут брать задачи из очереди и отправлять уведомления.

```
while ($task = $queue->pop()) {
    $user = $task['user'];
    $notification = $task['notification'];
    $notificationService->sendNotification($user, $notification);
}
```