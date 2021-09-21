import axios from 'axios'

export const httpClient = axios.create({
    baseURL: 'http://192.168.1.72:8888'
})