<?php

/**
 * ReportTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ReportTable extends PluginReportTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object ReportTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Report');
    }
}