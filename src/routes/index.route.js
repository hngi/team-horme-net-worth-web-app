import { Router } from 'express';

import net_Ctrl from '../controllers/net-worth-controller';

const netWorthRoute = Router();

netWorthRoute.post('/all', net_Ctrl.AddEntry)

export default netWorthRoute;