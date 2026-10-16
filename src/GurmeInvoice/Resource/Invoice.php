<?php

namespace GurmeInvoice\Resource;

class Invoice extends Base
{
    public string $endpoint = 'invoices';

    public function forceDelete($id)
    {
        return $this->request->send('DELETE', $this->endpoint . '/force/' . $id);
    }
}
