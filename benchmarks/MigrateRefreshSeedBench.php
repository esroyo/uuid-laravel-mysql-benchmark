<?php

use App\MigrateRefreshSeed;

class MigrateRefreshSeedBench
{
    /**
     * @Revs(10)
	 * @Iterations(1)
     */
    public function benchGenerateUsers()
    {
        $runner = new MigrateRefreshSeed;
        $runner->generateUsers();
    }

    /**
     * @Revs(10)
	 * @Iterations(1)
     */
    public function benchGenerateTusers()
    {
        $runner = new MigrateRefreshSeed;
        $runner->generateTusers();
    }
}
