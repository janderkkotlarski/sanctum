import { storeModuleFactory } from '../../services/store';

export interface User {
    id: number;
    name: string;
    email: string;  
}

// Author store based upon generalized store
export const userStore = storeModuleFactory<User>('users');