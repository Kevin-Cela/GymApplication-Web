<?php

class Review
{
  private $_user_role;
  private $state;

  public function __construct($role)
  {
    $this->_user_role = $role;
    $this->state = "UNREVIEWED";
  }
  function getState()
  {
    return $this->state;
  }

  function setState($newState)
  {
    $this->state = $newState;
  }

  function getRole()
  {
    return $this->_user_role;
  }

  function renderReviewBasedOnState($name, $surname, $content, $date_created, $state)
  {

    switch ($this->getRole()) {
      case 'MANAGER':
        return $this->renderManagerReview($name, $surname, $content, $date_created, $state);
      case 'COACH':
        return $this->renderCoachReview($name, $surname, $content, $date_created, $state);
      default:
        return $this->renderMemberReview($name, $surname, $content, $date_created, $state);
    }
  }

  function renderCoachReview($name, $surname, $content, $date_created, $state)
  {
    return '
      <div class="p-4 rounded-lg border border-slate-700 w-fit h-fit max-h-40">
        <p class="md:text-xl text-lg tracking-wide text-center">Review for' . $name . ' ' .  $surname . ' </p>
        <p class="md:text-xl text-lg tracking-wide text-left">' . $content . ' </p>
        <p class="text-sm tracking-wide text-right">' . $date_created . '</p>
        <div class="py-4">
      ' . ($state === 'ACCEPTED' || $state === 'DECLINED') ? '
          <button class="w-fit h-fit px-3 py-1 tracking-wider text-lg border rounded-md border-red-600 hover:bg-red-500 hover:text-slate-200 focus:bg-red-500 focus:text-slate-200 transition-colors duration-300 ease-in-out">Undo</button>
      ' : '
          <button class="w-fit h-fit px-3 py-1 tracking-wider text-lg border rounded-md border-green-600 hover:bg-green-500 hover:text-slate-800 focus:bg-green-500 transition-colors duration-300 ease-in-out">Approve Review</button>
          <button class="w-fit h-fit px-3 py-1 tracking-wider text-lg border rounded-md border-red-600 hover:bg-red-500 hover:text-slate-200 focus:bg-red-500 focus:text-slate-200 transition-colors duration-300 ease-in-out">Decline Review</button>
        '  . '
        </div>
      </div>';
  }
  function renderMemberReview($name, $surname, $content, $date_created, $state)
  {
    return '
      <div class="p-4 rounded-lg border border-slate-700 w-fit h-fit max-h-40">
        <p class="md:text-xl text-lg tracking-wide text-center">Review for' . $name . ' ' .  $surname . ' </p>
        <p class="md:text-xl text-lg tracking-wide text-left">' . $content . ' </p>
        <p class="text-sm tracking-wide text-right">' . $date_created . '</p>
        <div class="py-4">
      ' . ($state === 'ACCEPTED' || $state === 'DECLINED') ? '
          <button class="w-fit h-fit px-3 py-1 tracking-wider text-lg border rounded-md border-red-600 hover:bg-red-500 hover:text-slate-200 focus:bg-red-500 focus:text-slate-200 transition-colors duration-300 ease-in-out">Undo</button>
      ' : '
          <button class="w-fit h-fit px-3 py-1 tracking-wider text-lg border rounded-md border-green-600 hover:bg-green-500 hover:text-slate-800 focus:bg-green-500 transition-colors duration-300 ease-in-out">Approve Review</button>
          <button class="w-fit h-fit px-3 py-1 tracking-wider text-lg border rounded-md border-red-600 hover:bg-red-500 hover:text-slate-200 focus:bg-red-500 focus:text-slate-200 transition-colors duration-300 ease-in-out">Decline Review</button>
        '  . '
        </div>
      </div>';
  }
  function renderManagerReview($name, $surname, $content, $date_created, $state)
  {
    return '
      <div class="p-4 rounded-lg border border-slate-700 w-fit h-fit max-h-40">
        <p class="md:text-xl text-lg tracking-wide text-center">Review for' . $name . ' ' .  $surname . ' </p>
        <p class="md:text-xl text-lg tracking-wide text-left">' . $content . ' </p>
        <p class="text-sm tracking-wide text-right">' . $date_created . '</p>
        <div class="py-4">
      ' . ($state === 'ACCEPTED' || $state === 'DECLINED') ? '
          <button class="w-fit h-fit px-3 py-1 tracking-wider text-lg border rounded-md border-red-600 hover:bg-red-500 hover:text-slate-200 focus:bg-red-500 focus:text-slate-200 transition-colors duration-300 ease-in-out">Undo</button>
      ' : '
          <button class="w-fit h-fit px-3 py-1 tracking-wider text-lg border rounded-md border-green-600 hover:bg-green-500 hover:text-slate-800 focus:bg-green-500 transition-colors duration-300 ease-in-out">Approve Review</button>
          <button class="w-fit h-fit px-3 py-1 tracking-wider text-lg border rounded-md border-red-600 hover:bg-red-500 hover:text-slate-200 focus:bg-red-500 focus:text-slate-200 transition-colors duration-300 ease-in-out">Decline Review</button>
        '  . '
        </div>
      </div>';
  }
}

