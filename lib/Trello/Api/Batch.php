<?php

namespace Trello\Api;

/**
 * Trello Card API
 * @link https://trello.com/docs/api/card
 *
 * Unimplemented:
 * - https://trello.com/docs/api/card/#put-1-cards-card-id-or-shortlink-checklist-idchecklist-checkitem-idcheckitem-name
 * - https://trello.com/docs/api/card/#put-1-cards-card-id-or-shortlink-checklist-idchecklist-checkitem-idcheckitem-pos
 * - https://trello.com/docs/api/card/#put-1-cards-card-id-or-shortlink-checklist-idchecklist-checkitem-idcheckitem-state
 * - https://trello.com/docs/api/card/#put-1-cards-card-id-or-shortlink-checklist-idchecklistcurrent-checkitem-idcheckitem
 * - https://trello.com/docs/api/card/#post-1-cards-card-id-or-shortlink-checklist-idchecklist-checkitem
 * - https://trello.com/docs/api/card/#post-1-cards-card-id-or-shortlink-checklist-idchecklist-checkitem-idcheckitem-converttocard
 * - https://trello.com/docs/api/card/#post-1-cards-card-id-or-shortlink-markassociatednotificationsread
 */
class Batch extends AbstractApi
{
    /**
     * Base path of cards api
     * @var string
     */
    protected $path = 'batch';

    /**
     * Find a card by id
     * @link https://trello.com/docs/api/card/#get-1-cards-card-id-or-shortlink
     *
     * @param array $urls
     * @return array card info
     */
    public function show(array $urls)
    {
        return $this->get($this->getPath().'?urls='.implode(',',$urls));
    }
}
