import axios from 'axios';

const http = axios.create({
    baseURL: '/api',
    headers: {
        'Content-Type': 'application/json'
    }
});

// Specific request handling for binding remote and local storage
export const getRequest = (endpoint: string) => http.get(endpoint);
export const postRequest = (endpoint: string, data: Object) => http.post(endpoint, data);
export const putRequest = (endpoint: string, data: Object) => http.put(endpoint, data);
export const deleteRequest = (endpoint: string) => http.delete(endpoint);