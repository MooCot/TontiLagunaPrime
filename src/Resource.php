<?php

namespace TontiLagunaPrime;

class Resource
{
    private int $participants;
    private string $activity;
    private string $sender;

    public function getParticipants(): int
    {
        return $this->participants;
    }

    public function setParticipants(int $participants)
    {
        $participantChecker = new ParticipantChecker();
        $participantChecker->isParticipant($participants);
        $this->participants = $participants;
    }

    public function getActivity(): string
    {
        return $this->activity;
    }

    public function setActivity(string $activity)
    {
        $activityChecker = new ActivityChecker();
        $activityChecker->isAllowedActivity($activity);
        $this->activity = $activity;
    }

    public function getSender(): string
    {
        return $this->sender;
    }

    public function setSender(string $sender)
    {
        $senderChecker = new SenderChecker();
        $senderChecker->isAllowedSender($sender);
        $this->sender = $sender;
    }

    public function toArray()
    {
        return [
            'participants' => $this->participants,
            'type' => $this->activity
        ];
    }
}
